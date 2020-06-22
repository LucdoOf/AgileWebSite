/**
 * Un TabManager pour un groupe de tab
 */
class TabManager {

    constructor(groupName) {
        this.groupName = groupName;
        this.menuContainer = document.querySelector('.tab-menu.group-' + groupName);
        this.contentContainer = document.querySelector('.tab-content-wrapper.group-' + groupName);
        this.links = {};
        this.findLinks();
        this.bind();
    }

    findLinks() {
        const tabMenuLinks = this.menuContainer.querySelectorAll('.tab-menu-link');
        for (let i = 0; i < tabMenuLinks.length; i++) {
            const tabMenuLink = tabMenuLinks.item(i);
            const tabName =  [...tabMenuLink.classList].reduce(function (total,obj) {
                return obj.startsWith('tab-') ? obj.split('tab-')[1] : ''
            }, '');
            const linkedContent = this.contentContainer.querySelector('.tab-content.tab-' + tabName);
            if (linkedContent) {
                if (i === 0) {
                    tabMenuLink.classList.add('active');
                    linkedContent.classList.add('active');
                }
                this.links[tabName] = linkedContent;
            }
        }
    }

    bind() {
        for (const link in this.links) {
            this.menuContainer.querySelector('.tab-menu-link.tab-' + link).addEventListener('click', () => {
               this.closeAllTabs();
                this.menuContainer.querySelector('.tab-menu-link.tab-' + link).classList.toggle('active');
               this.links[link].classList.toggle('active');
            });
        }
    }

    closeAllTabs() {
        for (const link in this.links) {
            this.menuContainer.querySelector('.tab-menu-link.tab-' + link).classList.remove('active');
            this.links[link].classList.remove('active');
        }
    }


}
