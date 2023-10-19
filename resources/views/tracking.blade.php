<!DOCTYPE html>
<html>
    <head>
        <title>actualizar orden</title>
    </head>
    <body>
        <h1>actualizar orden</h1>
        <button onclick="update()">actualizar</button>
        <script>
            const update = () => {
                const formData = {
                    channel_uuid: 6202,
                    shipping: {
                        tracking_number: "123",
                        courier_name: "Coordinadora",
                        tracking_url:
                            "https://www.coordinadora.com/portafolio-de-servicios/servicios-en-linea/rastrear-guias/",
                    },
                    shipping_total: 10000,
                    subtotal: 469900,
                    total: 485900,
                    taxes: 77580.67,
                    discount: 0,
                    mailed: false,
                    on_time: null,
                };

                fetch("/api/orders/10962", {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(formData),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log("Respuesta del servidor:", data);
                    })
                    .catch((error) => {
                        console.error("Error en la solicitud:", error);
                    });
            };
        </script>
    </body>
</html>
