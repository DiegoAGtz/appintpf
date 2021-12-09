class Carrito {
  constructor(clave) {
    this.id = clave || "products";
    this.products = this.get();
  }

  add(producto) {
    if (!this.exists(producto.id)) {
      this.products.push(producto);
      this.save();
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
