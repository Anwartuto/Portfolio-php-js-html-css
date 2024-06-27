class FormHandler {
    constructor(formId, messageId) {
        this.form = document.getElementById(formId);
        this.message = document.getElementById(messageId);
        this.setupEventListeners();
    }

    setupEventListeners() {
        this.form.addEventListener("submit", (event) => {
            event.preventDefault();  
            this.handleSubmit();
        });
    }

    handleSubmit() {
        window.alert("Votre formulaire a bien été envoyé");
        this.form.style.display = 'none';
        this.message.innerHTML = "Votre formulaire a bien été envoyé";
    }
}

class ButtonHandler {
    constructor(buttonId, action) {
        this.button = document.getElementById(buttonId);
        this.action = action;
        this.setupEventListeners();
    }

    setupEventListeners() {
        this.button.addEventListener("click", () => {
            this.handleClick();
        });
    }

    handleClick() {
        this.action();
    }
}

const formHandler = new FormHandler("flex", "message");


class ExampleClass {
    constructor(property) {
        this._property = property;
    }

    get property() {
        return this._property;
    }

    set property(value) {
        this._property = value;
    }

    methodExample() {
        console.log("Method called");
    }
}

const exampleInstance = new ExampleClass("initial value");
console.log(exampleInstance.property);
exampleInstance.property = "new value";
console.log(exampleInstance.property);
exampleInstance.methodExample();


   
