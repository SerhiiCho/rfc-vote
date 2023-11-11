import Alpine from 'alpinejs'

const localStorageKey = 'voteBarFeatureDiscovery'

Alpine.data('voteBarDiscovery', () => ({
    showDiscoveryPopup: false,

    init() {
        const needsToDiscover = localStorage.getItem(localStorageKey) === null

        if (needsToDiscover) {
            this.showDiscoveryPopup = true
        }
    },

    hideDiscoveryPopup() {
        this.showDiscoveryPopup = false
        localStorage.setItem(localStorageKey, '1')
    },
}))