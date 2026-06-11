// Aqui pega os elementos do HTML
const themeButton = document.getElementById("theme-button");
const printButton = document.getElementById("print-button");
const contactForm = document.getElementById("contact-form");
const formStatus = document.getElementById("form-status");
const currentYear = document.getElementById("current-year");

// Atualiza o ano automaticamente no rodapé
currentYear.textContent = new Date().getFullYear();

// Verifica se já existe uma preferência de tema salva
const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
  document.body.classList.add("dark-theme");
  themeButton.textContent = "☀️";
}

// Alternar tema claro/escuro
themeButton.addEventListener("click", () => {
  document.body.classList.toggle("dark-theme");

  const isDarkTheme = document.body.classList.contains("dark-theme");

  if (isDarkTheme) {
    themeButton.textContent = "☀️";
    localStorage.setItem("theme", "dark");
  } else {
    themeButton.textContent = "🌙";
    localStorage.setItem("theme", "light");
  }
});

// Botão para imprimir ou salvar como PDF
printButton.addEventListener("click", () => {
  window.print();
});

// Validação simples do formulário antes de enviar para o PHP
contactForm.addEventListener("submit", (event) => {
  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const mensagem = document.getElementById("mensagem").value.trim();

  formStatus.style.color = "#ff7a59";

  if (nome.length < 3) {
    event.preventDefault();
    formStatus.textContent = "Por favor, digite um nome com pelo menos 3 caracteres.";
    return;
  }

  if (!email.includes("@") || !email.includes(".")) {
    event.preventDefault();
    formStatus.textContent = "Por favor, digite um e-mail válido.";
    return;
  }

  if (mensagem.length < 10) {
    event.preventDefault();
    formStatus.textContent = "A mensagem precisa ter pelo menos 10 caracteres.";
    return;
  }

  formStatus.style.color = "#3ab7a5";
  formStatus.textContent = "Enviando mensagem...";
});

// Animação suave ao aparecer na tela
const animatedElements = document.querySelectorAll(".content-section, .sidebar-section, .intro");

animatedElements.forEach((element) => {
  element.classList.add("reveal");
});

const revealOnScroll = () => {
  animatedElements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (elementTop < windowHeight - 80) {
      element.classList.add("show");
    }
  });
};

window.addEventListener("scroll", revealOnScroll);
window.addEventListener("load", revealOnScroll);