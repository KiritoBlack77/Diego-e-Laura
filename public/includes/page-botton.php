<footer>
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: center;">
                <img class="mb-2" src="./img/coração1.png" alt="" width="64" height="64">
                <span class="display-6">Estamos se amando há:</span>
                <small class="d-block mb-3">
                    <p id="contador"></p>
                </small>
            </div>
        </div>
    </div>
</footer>
<script>
    function atualizarContador() {
        const inicio = new Date("2024-12-16T00:00:00");
        const agora = new Date();
        const diff = agora - inicio;

        if (diff < 0) {
            document.getElementById("contador").innerText = "A data ainda não chegou!";
            return;
        }

        const minutosTotais = Math.floor(diff / (1000 * 60));
        const diasTotais = Math.floor(diff / (1000 * 60 * 60 * 24));
        const anos = Math.floor(diasTotais / 365);
        const meses = Math.floor((diasTotais % 365) / 30);
        const dias = Math.floor((diasTotais % 365) % 30);
        const horas = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutos = Math.floor((diff / (1000 * 60)) % 60);
        const segundos = Math.floor((diff / 1000) % 60);

        document.getElementById("contador").innerText =
            `${anos} ano(s), ${meses} mês(es), ${dias} dia(s), ${horas}h ${minutos}m ${segundos}s desde 16/12/2024.`;
    }

    setInterval(atualizarContador, 1000);
    atualizarContador();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" />
</script>
</body>

</html>