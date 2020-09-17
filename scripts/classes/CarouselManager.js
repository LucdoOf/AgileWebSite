/**
 * Gère le carousel de mots de la home page
 */
class CarouselManager {

    constructor(container) {
        this.container = container;
        this.items = this.container.querySelectorAll(".carousel-item");
        this.icons = document.querySelectorAll(".carousel-icon");
        this.texts = document.querySelectorAll(".carousel-text");
        this.index = 0;
        this.timeoutId = null;
        this.roll();
        this.bind();
    }

    roll(index = null) {
        this.getPreviousItem().classList.remove("previous-item");
        this.getActualItem().classList.remove("actual-item");
        this.getNextItem().classList.remove("next-item");
        this.index = index ?? (this.index === this.items.length -1 ? 0 : this.index + 1);
        this.icons.forEach(icon => icon.classList.remove("active"))
        this.icons.item(this.index).classList.add("active");
        this.texts.forEach(text => text.classList.remove("active"));
        this.texts.item(this.index).classList.add("active");
        this.getPreviousItem().classList.add("previous-item");
        this.getActualItem().classList.add("actual-item");
        this.getNextItem().classList.add("next-item");
        this.timeoutId = setTimeout(() => {
            this.roll();
        }, 5000);
    }

    bind() {
        this.icons.forEach((icon, index) => {
           icon.addEventListener("click", () => {
                clearTimeout(this.timeoutId);
                this.roll(index)
           });
        });
    }

    getActualItem() {
        return this.items[this.index];
    }

    getNextItem() {
        if(this.index === this.items.length -1) {
            return this.items[0];
        } else return this.items[this.index+1];
    }

    getPreviousItem() {
        if(this.index === 0) {
            return this.items[this.items.length-1];
        } else return this.items[this.index-1];
    }

}
