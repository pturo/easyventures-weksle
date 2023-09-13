import { button1, button2, button3, button4, confText, mainDesc, privacyPolicy, saveChangesButtonText, undoButtonText } from '../../../userSettings.js';
import { Settings } from '../../Components/Settings.js';

export const mainScreen = () => {


    console.log(window.buttonAdvancedSettings);
    const mainScreenHTML =  `
    <div class="">
        <div class="advancedCookiesPopup__message-content">
        ${mainDesc}
        </div>
        <div class="advancedCookiesPopup__buttons">
            ${buttonAdvancedSettings ? button1 : ''}
            ${buttonDeprecateEverything ? button2 : ''}
            ${buttonOnlyImportant ? button3 : ''}
            ${buttonAcceptAll ? button4 : ''}
            
        </div>

    </div>
    `;

    const mainScreenDOM = document.createElement("div");
    mainScreenDOM.classList.add("advancedCookiesPopup__enter-info");
    mainScreenDOM.innerHTML = mainScreenHTML;

    return mainScreenDOM;
}

export const advancedSettings = () => {

    let allSettings = Settings().join("")

    const advancedSettingsHTML =  `
    <div class=""> 
        
        <div class="advancedCookiesPopup__all-settings">
        <span class="advancedCookiesPopup__subtitle">${confText}</span>
            ${allSettings}
        </div>
        
        <div class="advancedCookiesPopup__buttons">
            <a href="javascript:window.ModuleSwitchHandler()" class="advancedCookiesPopup__button--white">${undoButtonText}</a>
            <a href="javascript:closeACPModal()" class="advancedCookiesPopup__button--simple">${saveChangesButtonText}</a>
        </div>
    </div>
    `;

    const advancedSettingsDOM = document.createElement("div");
    advancedSettingsDOM.classList.add("advancedCookiesPopup__settings");
    advancedSettingsDOM.innerHTML = advancedSettingsHTML;

    return advancedSettingsDOM;
}