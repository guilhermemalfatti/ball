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
            var boxX = 20;//local conto seperior x
            var boxY = 30;//local conto seperior y
            var boxWidth = 350;//largura caixa
            var boxHeigth = 250;//altura caixa
            var ballRad = 10;//raio da bola
            var boxBoundX = boxWidth +  boxX - ballRad;//limite à direita
            var boxBoundY = boxHeigth + boxY - ballRad;//limite ao fundo                             
            var inBoxBoundX = boxX + ballRad;//limite a esquerda
            var inBoxBoundY =boxY + ballRad;//limite do topo
            var ballX = 50;//posição inicial x
            var ballY = 60;//posição inicial y
            var ctx;
            var ballDeslcX = 4;//deslocamento inicial x
            var ballDeslcY = 8;//deslocamento inicial y            
            
                        function init(){
                             
                            ctx = document.getElementById('can').getContext('2d');
                            ctx.lineWidth = ballRad;
                            ctx.fillStyle = "rgb(200, 0, 50)";
                            moveBall();
                            setInterval(moveBall, 100);
                        }
                    
                        function moveBall(){
                            ctx.clearRect(boxX, boxY, boxWidth, boxHeigth);
                            moveEndCheck();
                            ctx.beginPath();
                            
                            ctx.arc(ballX, ballY, ballRad, 0, Math.PI*2, true);
                            ctx.fill();
                            ctx.strokeRect(boxX, boxY, boxWidth, boxHeigth);
                        }
                    
                        function moveEndCheck(){
                            var nBallX = ballX + ballDeslcX, 
                                nBallY = ballY + ballDeslcY;     
                                
                               
                            if(nBallX > boxBoundX){
                                ballDeslcX =-ballDeslcX;
                                nBallX = boxBoundX;
                            }
                            if(nBallX < inBoxBoundX){
                                nBallX = inBoxBoundX;
                                ballDeslcX = -ballDeslcY;
                            }
                            if(nBallY > boxBoundY){
                                nBallY = boxBoundY;
                                ballDeslcY = -ballDeslcY;
                            }
                            if(nBallY < inBoxBoundY){
                                nBallY = inBoxBoundY;
                                ballDeslcY = -ballDeslcY;
                            }    
                            
                            ballX = nBallX;
                            ballY = nBallY;
                        }
                     function change(){
                                ballDeslcX = Number(f.vh.value);
                                ballDeslcY = Number(f.vv.value);
                                return false;
                            }
        </script>

    </head>
    <body onload="init()">
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
