class Csuma {
    constructor(numero1, numero2) {
      this.numero1 = numero1;
      this.numero2 = numero2;
    }
  
    sumaN() {
      return this.numero1 + this.numero2;
    }
  }
  
  function sumarnumeros() {
    let val1 = parseInt(document.getElementById("txtprimerN").value);
    let val2 = parseInt(document.getElementById("txtsegundoN").value);
    let obj = new Csuma(val1, val2);
    document.getElementById("sumar").innerText = obj.sumaN();
  }