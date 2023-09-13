import { advancedSettings, mainScreen } from "../mainLayout/views/mainViews.js";
import { addCheckedCookies } from "./Cookies.js";

const moduleSwitchHandler = async (view = null) => {
    const ACPContainer = await document.querySelector(".advancedCookiesPopup__container");

    ACPContainer.innerHTML !== '' ? ACPContainer.innerHTML = '' : null;

    
    if (view === null) {
        const ACPContainerHTML = await mainScreen();
        ACPContainer.append(ACPContainerHTML);
    } else if (view === 'advancedSettings') {
        const ACPContainerHTML = await advancedSettings();
        ACPContainer.append(ACPContainerHTML);
        ACPContainer.scrollTo(0, 0);
    } else if (view === 'onlyImportant') {

        //Change important allows
        await onlyImportantItems.forEach( el => {
            changeStatusHandler(el, true);
        });
        await addCheckedCookies();
        await closeACPModal();
    } else if (view === 'acceptAll') {
        //Accept all
        await settingsList.forEach( el => {
            changeStatusHandler(el.id, true);
        });
        await addCheckedCookies();
        await closeACPModal();
    }


}

export default moduleSwitchHandler;