const containers = document.getElementsByClassName("logo");
for (let container of containers) {
    container.addEventListener("mousemove", function (e) {
        createSparks(e);
    });
};

function createSparks(e) {
    const sparkContainer = document.getElementById("spark-container");

    for (let i = 0; i < 2; i++) { // Número de chispas por evento
        const spark = document.createElement("div");
        spark.classList.add("spark");

        // Posicionamos la chispa en la ubicación donde se encuentra el mouse
        spark.style.left = `${e.clientX - 3}px`;
        spark.style.top = `${e.clientY - 3}px`;

        // Agregamos una dirección aleatoria para las chispas
        const randomX = (Math.random() - 0.5) * 100;
        const randomY = (Math.random() - 0.5) * 100;

        // Definir las variables CSS de animación
        spark.style.setProperty("--x", `${randomX}px`);
        spark.style.setProperty("--y", `${randomY}px`);

        sparkContainer.appendChild(spark);

        // Eliminar la chispa después de la animación
        setTimeout(() => {
            sparkContainer.removeChild(spark);
        }, 500);
    }
}