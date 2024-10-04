class FormValidator {
    constructor(formId, fields) {
      this.form = document.getElementById(formId);
      this.fields = fields;
      this.currentForm = {};
    //   NO SE UTILIZA, PERO LO DEJO ACTIVO
    //   this.validationRules = {
        // usuario: this.usuarioVar,
        // Agrega aquí más reglas de validación
    //   };
  
      this.attachEventListeners();
    }
  
    attachEventListeners() {
      this.fields.forEach((field) => {
        const input = document.getElementById(field);
        input.addEventListener('keyup', this.validateField.bind(this));
        input.addEventListener('blur', this.validateField.bind(this));
      });
  
      this.form.addEventListener('submit', this.handleSubmit.bind(this));
    }
  
    validateField(event) {
      const input = event.target;
      const fieldName = input.name;
      const fieldValue = input.value;
      const validationRule = this.validationRules[fieldName];
  
      this.currentForm[fieldName] = validationRule.test(fieldValue);
      this.updateFieldStatus(fieldName, this.currentForm[fieldName]);
    }
  
    updateFieldStatus(fieldName, isValid) {
      const fieldGroup = document.getElementById(`grupo__${fieldName}`);
      if (isValid) {
        fieldGroup.classList.remove('formulario__grupo-incorrecto');
        fieldGroup.classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${fieldName} .formulario__input-error`).classList.remove('formulario__input-error-activo');
      } else {
        fieldGroup.classList.remove('formulario__grupo-correcto');
        fieldGroup.classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${fieldName} .formulario__input-error`).classList.add('formulario__input-error-activo');
      }
    }
  
    handleSubmit(event) {
      event.preventDefault();
  
      const isFormValid = Object.values(this.currentForm).every(Boolean);
      if (isFormValid) {
        this.resetForm();
        this.showSuccessMessage();
        // Aquí puedes agregar la lógica para enviar el formulario
      } else {
        this.showErrorMessage();
      }
    }
  
    resetForm() {
      this.form.reset();
      this.disableInputs();
      this.hideSuccessMessage();
      this.clearFieldClasses();
    }
  
    disableInputs() {
      document.querySelectorAll('#formulario input').forEach((input) => {
        input.setAttribute('disabled', true);
      });
      document.getElementById('registrar').disabled = true;
    }
  
    showSuccessMessage() {
      document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
      setTimeout(() => {
        this.hideSuccessMessage();
      }, 3000);
    }
  
    hideSuccessMessage() {
      document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
    }
  
    showErrorMessage() {
      document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
      setTimeout(() => {
        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
      }, 2000);
    }
  
    clearFieldClasses() {
      document.querySelectorAll('.formulario__grupo').forEach((group) => {
        group.classList.remove('formulario__grupo-incorrecto');
        group.classList.remove('formulario__grupo-correcto');
      });
    }
  }
  
class usuario extends FormValidator {
    usuarioVar = /^[a-zA-Z]{1,15}$/;
    nombreVar = /^[a-zA-ZÀ-ý\s]{1,45}$/;
    apellidoVar = /^[a-zA-ZÀ-ý\s]{1,45}$/;

    constructor(formId, fields){
        super(formId, fields);
        this.validationRules = {
            usuario: this.usuarioVar,
            nombre: this.nombreVar,
            apellido: this.apellidoVar,
            // Agrega aquí más reglas de validación
        };
    }

}

  // Uso de la clase FormValidator
//   const formValidator = new FormValidator('formulario', ['usuario']);
  const formValidator = new usuario('formulario', ['usuario', 'nombre', 'apellido']);