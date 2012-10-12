<!DOCTYPE html>
<html>
    <head>
        <title>ball \o/</title>
        <style>
            form{
                width: 330px;
                margin: 20px;
                background-color: brown;
                padding: 20px;
            }

        </style>
        <script type="text/javascript">
            var boxX= 20,//local conto seperior x
                boxY = 30,//local conto seperior y
                boxWidth = 350,//largura caixa
                boxHeigth = 250,//altura caixa
                ballRad = 10,//raio da bola
                boxBoundX = boxHeigth +  boxX - ballRad,//limite à direita
                boxBoundY = boxHeight + boxY - ballRad,//limite ao fundo
                inBoxBoundX = boxX + ballRad,//limite a esquerda
                inBoxBoundY =boxY + ballRad,//limite do topo
                ballX = 50,//posição inicial x
                ballY = 60,//posição inicial y
                ctx,
                ballDeslcX = 4,//deslocamento inicial x
                ballDeslcY = 8;//deslocamento inicial y            
        
        function init(){
            ctx = document.getElementById('can').getContext('2d');
            ctx.lineWidth = ballRad;
            ctx.fillStyle = "rgb(200, 0, 50)";
            //moveBall();
            setInterval(moveBall, 100);
        }
        
            </script>
        
    </head>
    <body onload="init();">
        <canvas id="can" width="400" height="300">Seu Navegador não suporta html 5</canvas>
        <br>
        <form name="f" id="f" onsubmit="return change();">
            Velocidade Horizontal: <input name="vh" id="vh" value="4" type="number" min="-10"  max="10"/>
            <br>
            velocidade Vertical: <input name="vv" id="vv" value="8" type="number" min="-10" max="10"/>
            <input type="submit" value="CHANGE"/>
        </form>
    </body>
</html>
