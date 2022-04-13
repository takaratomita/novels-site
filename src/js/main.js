{
    'use strict'

    const body = document.getElementsByTagName('body')[0].classList;
    const configBtn = document.getElementById('config-btn');
    const humberger = document.getElementById('humberger');
    const darkMode = document.getElementById('dark-mode');
    const darkModeSp = document.getElementById('dark-mode_sp');

    // ダークモードに関する処理
    if( Cookies.get('dark-mode') == "true" ){
        body.add('dark-mode');
    }

    darkMode.addEventListener('click', () => {
        if(body.contains('dark-mode')){
            body.remove('dark-mode');

            Cookies.set('dark-mode', 'false', {expires: 1});
        }else{
            body.add('dark-mode');
            Cookies.set('dark-mode', 'true', {expires: 1});

        }

        configBtn.checked = false;
    });

    darkModeSp.addEventListener('click', () => {
        if(body.contains('dark-mode')){
            body.remove('dark-mode');

            Cookies.set('dark-mode', 'false', {expires: 1});
        }else{
            body.add('dark-mode');
            Cookies.set('dark-mode', 'true', {expires: 1});

        }

        humberger.checked = false;
    });

    
    
}