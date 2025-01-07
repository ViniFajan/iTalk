// Seleciona todos os botões na área de seleção de idioma
const languageButtons = document.querySelectorAll('.language-selector button');

// Adiciona um evento de clique a cada botão
languageButtons.forEach(button => {
    button.addEventListener('click', async (event) => {
      const selectedLanguage = event.target.id.replace('lang-', '');

        // Remove a classe 'active' de todos os botões
        languageButtons.forEach(btn => btn.classList.remove('active'));

        // Adiciona a classe 'active' ao botão clicado
        button.classList.add('active');

        const activeLanguage = button.innerText;

        try {
          const response = await fetch('http://127.0.0.1:5000/api/set-language', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ language: selectedLanguage }),
          });
          const data = await response.json();
          if (response.ok) {
              swal(`Idioma configurado para: ${activeLanguage}`);
          } else {
              swal("Erro!", `${data.error}`, "error");
          }
      } catch (error) {
          console.error('Erro ao configurar o idioma:', error);
          swal({
            title: "Erro ao configurar o idioma",
            icon: "error"
          });
      }
    });
});

// Botão para iniciar o reconhecimento de fala
document.getElementById('mic-btn').addEventListener('click', async () => {
  const micButton = document.getElementById('mic-btn'); // Seleciona o botão do microfone
  const responseElement = document.querySelector('.circle'); // Feedback visual
  const selectedLanguage = document.querySelector('.language-selector button.active')?.id.replace('lang-', '') || 'en'; // Obtém o idioma selecionado pelo botão com a classe 'active'

  try {
      // Adiciona a classe de gravação para mudar a cor do botão
      micButton.classList.add('recording');

      // Faz uma requisição ao endpoint de reconhecimento de fala
      const response = await fetch('http://127.0.0.1:5000/api/recognize-speech', { 
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify({ language: selectedLanguage }),
      });

      const data = await response.json();

      if (data.recognized_text) {
          responseElement.style.background = 'linear-gradient(135deg, #34eb77, #32a852)'; // Feedback visual para sucesso

          // Mostra o alerta com três botões
          swal({
              title: "Texto reconhecido",
              text: `Você disse: "${data.recognized_text}". O que deseja fazer?`,
              buttons: {
                  cancel: "Digitar frase",
                  tentarNovamente: {
                      text: "Tentar novamente",
                      value: "tentarNovamente",
                  },
                  certo: {
                      text: "Certo!",
                      value: "certo",
                  },
              },
          }).then((value) => {
              switch (value) {
                  case "certo":
                      // Se o usuário confirmou que está certo, prosseguir com o envio do texto reconhecido
                      sendTextToFlask(data.recognized_text);
                      break;

                  case "tentarNovamente":
                      // Se o usuário quiser tentar novamente, reiniciar o reconhecimento de fala
                      document.getElementById('mic-btn').click();
                      break;

                  default:
                      // Se o usuário quiser digitar uma frase, mostrar um prompt para entrada
                      swal("Digite sua frase:", {
                          content: "input",
                      }).then((inputText) => {
                          if (inputText) {
                              sendTextToFlask(inputText); // Envia o texto digitado ao Flask
                          } else {
                              swal("Nenhuma frase foi digitada!");
                          }
                      });
              }
          });

      } else {
          responseElement.style.background = 'linear-gradient(135deg, #eb4034, #a83232)'; // Feedback visual para erro
          swal("Erro", `Erro ao reconhecer texto: ${data.error}`, "error");
      }
  } catch (error) {
      responseElement.style.background = 'linear-gradient(135deg, #eb4034, #a83232)'; // Feedback visual para erro
      console.error('Erro ao se comunicar com o Flask:', error);
      swal("Erro", "Erro ao se comunicar com o Flask", "error");
  } finally {
      // Remove a classe de gravação ao terminar a requisição
      micButton.classList.remove('recording');
  }
});
  
  // Botão para cancelar (redefine o feedback visual)
  document.getElementById('cancel-btn').addEventListener('click', () => {
    const responseElement = document.querySelector('.circle');
    const buttons = document.querySelectorAll('.custom-btn');

    // Remove a classe 'selected'
    buttons.forEach(button => {
      buttons.forEach(btn => btn.classList.remove('selected')); 
    });

    responseElement.style.background = 'linear-gradient(135deg, #007bff, #0056b3)';
    swal({
      title: "Operação cancelada!",
      icon: "error"
    });
  });
  
  // Função para enviar texto ao Flask e obter resposta do Gemini
  async function sendTextToFlask(userText) {
    const responseElement = document.querySelector('.circle'); // Feedback visual
  
    try {
      const response = await fetch('http://127.0.0.1:5000/api/send-text', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ text: userText }),
      });
      const data = await response.json();
  
      if (data.response) {
        responseElement.style.background = 'linear-gradient(135deg, #34eb77, #32a852)'; // Feedback visual para sucesso
        swal({
          title: "Resposta da IA:",
          text: `${data.response}`
        });
      } else {
        responseElement.style.background = 'linear-gradient(135deg, #eb4034, #a83232)'; // Feedback visual para erro
        swal({
          title: "Erro!",
          text: `${data.error}`,
          icon: "error"
        });
      }
    } catch (error) {
      responseElement.style.background = 'linear-gradient(135deg, #eb4034, #a83232)'; // Feedback visual para erro
      console.error('Erro ao se comunicar com o Flask:', error);
      swal({
        title: "Erro ao se comunicar com o Flask!",
        icon: "error"
      });
    }
  }
  