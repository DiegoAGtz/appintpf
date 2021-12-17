class Car {
  constructor(id) {
    this.id = id || "products";
    this.products = this.get();
  }

  add(producto) {
    if (!this.exists(producto.id)) {
      producto.cantidad = 1;
      this.products.push(producto);
      console.log(this.products)
      this.save();
    }
  }

  plus(id) {
    if(this.exists(id)) {
      const i = this.products.findIndex((p) => p.id === id);
      if(i != -1) {
        this.products[i].cantidad++
        localStorage.setItem(this.id, JSON.stringify(this.products))
      }
    }
  }

  minus(id) {
    if(this.exists(id)) {
      const i = this.products.findIndex((p) => p.id === id);
      if(i != -1) {
        this.products[i].cantidad--
        if(this.products[i].cantidad > 0)
          localStorage.setItem(this.id, JSON.stringify(this.products))
        else
        this.remove(id)
      }
    }
  }

  remove(id) {
    const i = this.products.findIndex((p) => p.id === id);
    if (i != -1) {
      this.products.splice(i, 1);
      this.save();
    }
  }

  save() {
    localStorage.setItem(this.id, JSON.stringify(this.products));
  }

  get() {
    const productosCodificados = localStorage.getItem(this.id);
    return JSON.parse(productosCodificados) || [];
  }

  exists(id) {
    return this.products.find((producto) => producto.id === id);
  }

  amount() {
    return this.products.length;
  }
}

