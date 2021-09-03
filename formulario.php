<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Exercício 2 e 3 - formulário </title>

    <link rel="stylesheet" type="text/css" href="css.css">

</head>
<body>
    <section class="form">

        <div class="form-body">

            <div class="container has-text-centered">

                <div class="column is-4 is-offset-4">

                    <h3> Cadastro </h3>

                </div>

                <div class="box">

                    <form action="dados.php" method="post">

                        <div class="field">

                            <div class="control">

                                <input name="Nome" name="text" placeholder="Nome">

                            </div>

                        </div>

                        <div class="field">

                            <div class="control">

                                <input name="Sobrenome" type="text" placeholder="Sobrenome">

                            </div>

                        </div>

                        <div class="field">

                            <div class="control">

                                <input name="E-mail" type="email" placeholder="E-mail">

                            </div>

                        </div>

                        <button class="btn" type="submit"> Enviar </button>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>