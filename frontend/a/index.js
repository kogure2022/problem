/** APIのリクエスト先URL */
const API_URL = "https://catfact.ninja/fact";

$(function () {
    $('#refresh').on('click', executeApi);
});

/**
 * APIリクエストを行い結果に応じて画面の描画を行う
 *
 */
function executeApi() {
    $.ajax({
        url: API_URL,
        type: 'GET',
        dataType: 'json'
    }).done((data) => {
        apiSuccess(data);
    }).fail((jqXHR) => {
        apiFailed(jqXHR);
    });
}

/**
 * APIリクエストが成功した際に画面にAPIレスポンスの文字列を表示する
 *
 * @param data apiからのの返却json
 */
function apiSuccess(data) {
    setApiResponseText(data['fact']);
}

/**
 * APIリクエストが失敗した際に画面のリセットしてコンソールにレスポンスjsonを表示する
 *
 * @param jqXHR jQueryXMLHttpRequest
 */
function apiFailed(jqXHR) {
    setApiResponseText('');
    console.log(jqXHR.responseJSON);
}

/**
 * jqueryオブジェクト$('#api_response_text')にテキストを設定する
 *
 * @param text 設定する文字列
 */
function setApiResponseText(text) {
    $('#apitext').text(text);
}