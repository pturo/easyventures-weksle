import { settingsList } from "../../userSettings.js";

export const changeStatusHandler = (id, noCheckbox = null) => {
    if (noCheckbox === null) {
        const choosedSetting = settingsList.filter( el => el.id === id);
        const choosedSettingCheckbox = document.querySelector(".advancedCookiesPopup__settings-item[data-id='"+choosedSetting[0].id+"'] .advancedCookiesPopup__checkbox").checked;
    
        settingsList.forEach( el => {
            if (el.id === choosedSetting[0].id) return el.checked = choosedSettingCheckbox;
        });
    } else if(noCheckbox === true) {
        settingsList.forEach( el => {
            if (el.id === id) return el.checked = true;
        }); 
    }

}

export const Settings = () => {



    const mappedList = () => {
        const newList = settingsList.map( el => {
            return `
            <div class="advancedCookiesPopup__settings-item" data-id="${el.id}">
                <div class="advancedCookiesPopup__top">
                    <h2 class="advancedCookiesPopup__h2">${el.title}</h2>
                    <label class="ACPSwitchLabel">
                        <input type="checkbox" class="advancedCookiesPopup__checkbox" onClick="changeStatusHandler(${el.id})" ${el.alwaysChecked ? "checked disabled" : null} />
                        <span class="ACPslider ACPround"></span>
                    </label>
                </div>
                ${el.desc}
            </div>`;

        });

        return newList;
    }


    return mappedList();
}