let waiting = false;

function proporseNews(id) {
    let val = document.getElementById(id);
    if(waiting) {return};
    waiting = true;
    function run() {
        $.ajax({
            url: route,
            type: 'POST',
            data: {
                _token: token,
                id: id,
                data: val.value,
                action: action,
            },
            success: function (data) {
                $('#searched-news').html(data)
            }
        })
    }
    setTimeout(() => {
        waiting = false;
        run();
    }, 1000)
}

function showProporse() {
    document.getElementById('proporse-container').removeAttribute('hidden')
}
function hideProporse() {
    setTimeout(() =>
        document.getElementById('proporse-container').setAttribute('hidden', ''), 200)
}

function getNews(id) {
    $.ajax({
        url: route,
        type: 'POST',
        data: {
            _token: token,
            id: id,
            action: action,
        },
        success: function (data) {
            $('#news-module-list').html(data)
        }
    })
};

function actionNews(id) {
    let val = document.getElementById(id);
    $.ajax({
        url: route,
        type: 'POST',
        data: {
            _token: token,
            id: id,
            data: val.value ?? id,
            action: action,
        },
        success: function (data) {
            $('#news-module-list').html(data)
        }
    })
};