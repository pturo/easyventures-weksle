// Link to privacy policy
export const privacyPolicy = "kerhaus.pl/privacy";

// Navi buttons texts
export const saveChangesButtonText = 'Zapisz zmiany';
export const undoButtonText = 'Powrót';

// Headers texts
export const dearUserText = 'Drogi użytkowniku,';
export const confText = 'Ustawienia';

// Conf buttons texts
export const button1 = `<a href="javascript:window.ModuleSwitchHandler('advancedSettings')" class="advancedCookiesPopup__button--white">Ustawienia zaawansowane</a>`;
export const button2 = `<a href="javascript:window.ModuleSwitchHandler('deprecateEverything')" class="advancedCookiesPopup__button--red">Odrzuć wszystko</a>`;
export const button3 = `<a href="javascript:window.ModuleSwitchHandler('onlyImportant')" class="advancedCookiesPopup__button--red">Tylko niezbędne</a>`;
export const button4 = `<a href="javascript:window.ModuleSwitchHandler('acceptAll')" class="advancedCookiesPopup__button--simple">Zaakceptuj wszystko</a>`;

// Description texts
export const mainDesc = `Ta strona wykorzystuje pliki cookie, JavaScript, HTML 5 oraz inne technologie cyfrowe („pliki cookie”) umożliwiające zbieranie informacji z Twojego urządzenia. Wykorzystujemy pliki cookie funkcjonalne, analityczne oraz reklamowe i mediów społecznościowych. Funkcjonalne pliki cookie pozostają włączone, aby strona spełniała swoje funkcje. Plików dwóch ostatnich kategorii możesz używać wedle uznania. Możesz zaakceptować wszystkie pliki cookie tych dwóch kategorii, wybierając opcję „Akceptuj wszystkie” poniżej. Jeśli to dla Ciebie zbyt wiele, wybierz „Ustawienia” i dokonaj innego wyboru. Więcej informacji znajdziesz w Polityce Prywatności i wykorzystywania Plików Cookies. <a href="${privacyPolicy}">Sprawdź naszą politykę prywatności!</a>.`;

// Available cookies groups
export const settingsList = [
    {
        id: 0,
        title: 'Działanie',
        desc: `<p>Te pliki cookie umożliwiają korzystanie z podstawowych funkcji strony, dlatego pozostają uruchomione na stałe. Pamiętają Twoje wybory, poprawiając jakość korzystania z naszej witryny. Pliki te umożliwiają również działanie koszyka i procesu finalizacji zakupów oraz są wykorzystywane w kwestiach bezpieczeństwa i zgodności z przepisami. </p>`,
        checked: false,
        cookieName: 'ACPActivity',
        alwaysChecked: true
    },
    {
        id: 1,
        title: 'Analiza',
        desc: `<p>Te pliki cookie pozwalają nam na dalszy rozwój funkcjonalności strony i jej usprawnianie, śledząc sposób korzystania z tej witryny. W niektórych przypadkach mogą przyspieszyć prędkość przetwarzania Twoich żądań i pozwalają na zapamiętanie wybranych przez Ciebie ustawień strony. Odznaczenie tych plików cookie może uniemożliwić wybór ustawień strony i spowolnić jej wydajność. </p>`,
        checked: false,
        cookieName: 'ACPAnalytics',
        alwaysChecked: false
    },
    {
        id: 2,
        title: 'Social media',
        desc: `<p>Pliki cookie mediów społecznościowych dają Ci możliwość połączenia z portalami społecznościowymi i umożliwiają nam udostępnianie Ci (reklamowanie) treści naszej strony internetowej w mediach społecznościowych. Informacje pozyskiwane dzięki reklamowym plikom cookie są wykorzystywane do zachowania Twojego indywidualnego profilu reklamowego. Te pliki cookie umożliwiają nam dodanie Cię do konkretnej grupy odbiorców internetowych na naszej platformie zarządzania danymi (DMP). Celem stworzenia Twojego profilu i dodania go do grupy internetowych odbiorców na naszej DMP jest dostarczanie Ci odpowiednio ukierunkowanych reklam. Reklama ukierunkowana (w tym tzw. przekierowywanie) jest zazwyczaj prowadzona przez witryny stron trzecich, w tym przez portale społecznościowe. Możemy na przykład próbować określić, co najprawdopodobniej niedługo u nas kupisz, i wyświetlić Ci reklamę tego produktu. W oparciu o Twój profil możemy także prezentować Ci dopasowane treści na naszej stronie internetowej. Odznaczenie tych plików cookie może spowodować wyświetlanie reklam lub innych treści, które są dla Ciebie nieistotne lub mniej istotne. Więcej informacji znajdziesz w Polityce Prywatności i Plików Cookies. <a href="${privacyPolicy}">Polityka prywatności</a>.</p>`,
        checked: false,
        cookieName: 'ACPSocialMediaAndAds',
        alwaysChecked: false
    }
];