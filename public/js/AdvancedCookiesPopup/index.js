import Layout from './mainLayout/layout.js';
import { getCookie, setCookie, addCheckedCookies } from './Components/Cookies.js';
import moduleSwitchHandler from './Components/ModuleSwitchHandler.js';

/* MAIN SETTINGS */

const ACP_ACTIVE = true;
const ACP_PRIVACY_POLICY = 'test';

const buttonAdvancedSettings = true;        //is Advanced Settings button active
const buttonDeprecateEverything = false;    //is Deprecate Everything button active
const buttonOnlyImportant = false;           //is Only Important button active
// const buttonCloseModal = true;              //is Close Modal button active
const buttonAcceptAll = true;              //is Close Modal button active
const onlyImportantItems = [0, 1];          //list of items to set active on onlyImportant click

/* ------------------------------- */

window.buttonAdvancedSettings = buttonAdvancedSettings;
window.buttonDeprecateEverything = buttonDeprecateEverything;
window.buttonOnlyImportant = buttonOnlyImportant;
window.buttonAcceptAll = buttonAcceptAll;
window.addCheckedCookies = addCheckedCookies;
window.onlyImportantItems = onlyImportantItems;
window.ModuleSwitchHandler = moduleSwitchHandler;

/* MAIN SETTINGS END */

//Remove modal from body
const closeACPModal = () => {
    const ACPModal = document.querySelector('.advancedCookiesPopup');
    setCookie('ACPAccepted', 'true', 10)
    ACPModal.remove();
    addCheckedCookies();
    location.reload();
}
window.closeACPModal = closeACPModal;

//Add modal to body
const openACPModal = () => {
    if (ACP_ACTIVE === true) {
        const bodyDOMElement = document.querySelector('body');

        const newACPModal = document.createElement("div");
        newACPModal.classList.add("advancedCookiesPopup");
        newACPModal.innerHTML = Layout();
        bodyDOMElement.append(newACPModal);
        window.ModuleSwitchHandler();
    }
}

//Init the application
window.onload = function() { getCookie('ACPAccepted') !== 'true' ? openACPModal() : null; }

