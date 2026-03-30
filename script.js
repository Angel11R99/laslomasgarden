/* Minimal interactions: sticky header, menu panel, modal form */

function qs(sel, root) {
  return (root || document).querySelector(sel);
}

function qsa(sel, root) {
  return Array.from((root || document).querySelectorAll(sel));
}

const header = qs(".site-header");
const menuToggle = qs("[data-menu-toggle]");
const menuPanel = qs("#menuPanel");

const modal = qs("#infoModal");
const openModalButtons = qsa("[data-open-modal]");
const closeModalButtons = qsa("[data-close-modal]");
const form = qs("#infoForm");
const formNote = qs("#formNote");

let lastFocused = null;

function setHeaderState() {
  if (!header) return;
  header.classList.toggle("is-scrolled", window.scrollY > 10);
}

function setMenuOpen(open) {
  if (!menuToggle || !menuPanel) return;
  menuToggle.setAttribute("aria-expanded", open ? "true" : "false");
  if (open) menuPanel.removeAttribute("hidden");
  else menuPanel.setAttribute("hidden", "");
}

function toggleMenu() {
  const expanded = menuToggle.getAttribute("aria-expanded") === "true";
  setMenuOpen(!expanded);
}

function setModalOpen(open) {
  if (!modal) return;

  if (open) {
    lastFocused = document.activeElement;
    modal.removeAttribute("hidden");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";

    const firstField = qs("input, textarea, button", modal);
    if (firstField) firstField.focus();
  } else {
    modal.setAttribute("hidden", "");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    if (lastFocused && typeof lastFocused.focus === "function") lastFocused.focus();
  }
}

window.addEventListener("scroll", setHeaderState, { passive: true });
setHeaderState();

if (menuToggle) {
  menuToggle.addEventListener("click", toggleMenu);
}

qsa("[data-menu-close]").forEach((el) => {
  el.addEventListener("click", () => setMenuOpen(false));
});

openModalButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    setMenuOpen(false);
    setModalOpen(true);
  });
});

closeModalButtons.forEach((btn) => {
  btn.addEventListener("click", () => setModalOpen(false));
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    setMenuOpen(false);
    setModalOpen(false);
  }
});

document.addEventListener("click", (e) => {
  if (!menuPanel || !menuToggle) return;
  const expanded = menuToggle.getAttribute("aria-expanded") === "true";
  if (!expanded) return;

  const target = e.target;
  if (menuPanel.contains(target) || menuToggle.contains(target)) return;
  setMenuOpen(false);
});

function validateEmail(value) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(String(value || "").trim());
}

if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    if (formNote) formNote.textContent = "";

    const data = new FormData(form);
    const name = String(data.get("name") || "").trim();
    const email = String(data.get("email") || "").trim();

    if (!name) {
      if (formNote) formNote.textContent = "Please enter your name.";
      const field = qs("[name='name']", form);
      if (field) field.focus();
      return;
    }

    if (!validateEmail(email)) {
      if (formNote) formNote.textContent = "Please enter a valid email.";
      const field = qs("[name='email']", form);
      if (field) field.focus();
      return;
    }

    // No backend wired in this static build.
    if (formNote) formNote.textContent = "Thanks - we'll reach out shortly.";
    form.reset();

    window.setTimeout(() => {
      setModalOpen(false);
      if (formNote) formNote.textContent = "";
    }, 900);
  });
}
