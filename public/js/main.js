class FormValidator {
  constructor() {
    this.init();
  }

  init() {
    document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
      preloader.remove();
       AOS.init({
      duration: 800,
      easing: 'slide',
      once: true,
      mirror: false
    });
      });
    }
      this.focusInput();
      this.setupValidation();
      this.setupShowPassword();
    });
  }

  focusInput() {
    const inputElements = document.querySelectorAll('.input100');

    inputElements.forEach(input => {
      input.addEventListener('blur', () => {
        input.value.trim() !== "" ? input.classList.add('has-val') : input.classList.remove('has-val');
      });
    });
  }

  setupValidation() {
    const form = document.querySelector('.validate-form');
    const validateInputs = form.querySelectorAll('.input100');

    form.addEventListener('submit', event => {
      let check = true;

      validateInputs.forEach(input => {
        if (!this.validate(input)) {
          this.showValidate(input);
          check = false;
        }
      });

      if (!check) {
        event.preventDefault();
      }
    });

    validateInputs.forEach(input => {
      input.addEventListener('focus', () => {
        this.hideValidate(input);
      });
    });
  }

  validate(input) {
    if (input.type === 'text' || input.name === 'username') {
      if (!input.value.trim().match(/^[^\W_]{8,}$/)) return false;
    } else if(input.type === "number" && input.name == "keys"){
      if(input.value.length < 4 || input.value.length >= 8 || typeof parseInt(input.value) != "number") return false
    } else if(input.type == "password" && input.name == "pass"){
      if(input.value.length < 8) return false
    }
    else {
      if (input.value.trim() === '') {
        return false;
      }
    }
    return true;
  }

  showValidate(input) {
    const parent = input.parentElement;
    parent.classList.add('alert-validate');
  }

  hideValidate(input) {
    const parent = input.parentElement;
    parent.classList.remove('alert-validate');
  }

  setupShowPassword() {
    let showPass = 0;
    const showPassButton = document.querySelector('.btn-show-pass');

    showPassButton.addEventListener('click', () => {
      const inputField = showPassButton.nextElementSibling;

      if (showPass == 0) {
        inputField.type = 'text';
        showPassButton.querySelector('i').classList.remove('zmdi-eye');
        showPassButton.querySelector('i').classList.add('zmdi-eye-off');
        showPass = 1;
      } else {
        inputField.type = 'password';
        showPassButton.querySelector('i').classList.add('zmdi-eye');
        showPassButton.querySelector('i').classList.remove('zmdi-eye-off');
        showPass = 0;
      }
    });
  }
}

const formValidator = new FormValidator();