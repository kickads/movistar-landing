const url = 'https://sheets.googleapis.com/v4/spreadsheets/18ZWBlAu18S4HEIiLv8Jqj-8GAcKeDAL_wXVPj1OnlR4/values/landings?key=AIzaSyA0UzKcqkfcRz_uz7UqmJPN0zKNtRfLDXU';

fetch(url)
    .then((resp) => resp.json())
    .then(data => guardaDatos(data.values))
    .catch(function (error) {
        console.log(error);
    })

function guardaDatos(datos) {
    const landingsList = datos.map((dato) => ({
        ...dato
    }))
    let lpName = $("#whatsapp").attr("value");
    let registro = landingsList.find(element => element[0] == lpName);
    if (registro =! undefined) {
        for (let i = 0; i <= landingsList.length; i++){
            if ((landingsList[i])[0] === lpName) {
                if ((landingsList[i])[3] === "si"){
                    $(".js__whatsapp").css("display", "block");   
                } else {
                    $(".js__whatsapp").css("display", "none");
                }
            }
        }
    }
}

