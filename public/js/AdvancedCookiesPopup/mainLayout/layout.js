import { mainScreen, advancedSettings } from './views/mainViews.js';
import { Settings, changeStatusHandler } from '../Components/Settings.js';
import { addCheckedCookies } from '../Components/Cookies.js';
import { dearUserText, settingsList } from '../../userSettings.js';

const Layout = () => {

    window.settingsList = settingsList;
    window.changeStatusHandler = changeStatusHandler;

    const layout = `
        <div class="advancedCookiesPopup__inside">
            <div class="advancedCookiesPopup__blurScreen"></div>
            <div class="advancedCookiesPopup__content">
                
                <span class="advancedCookiesPopup__title">${dearUserText}</span>

                <div class="advancedCookiesPopup__container"></div>
                
            </div>
        </div>
    `;
    window.ModuleSwitchHandler();
    return layout;
}

export default Layout;