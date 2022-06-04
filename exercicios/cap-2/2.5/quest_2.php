        <div class="input">
            <h2>Conversão de graus Celsius para Fahreinheit</h2>
            <form action="quest_2.php" method="GET">
                Celsius <input type="number" name="celsius">
                <button type="submit">Converter</button>
            </form>
        </div>
        <?php
            $celsius = $_GET['celsius'];

            if(isset($_GET['celsius'])){
                $celsius = $_GET['celsius'];
            }

            $resultado = ($celsius * 9/5) + 32;


            echo "Resultado: " .$resultado;
         ?>









