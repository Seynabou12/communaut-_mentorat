<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    img {
        width: 100%;
        height: 800px;
        background-color: (0deg, rgba(193, 93, 251, 0.3), rgba(193, 93, 251, 0.3));
        position: relative;
    }

    .style-card-header {
        height: 150px;

        width: 150px;   
        background: #FFFFFF;
        border-radius: 50%;
        margin: auto;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        flex-direction: column;
    }

    .style-card {
        height: 350px;
        margin: 30px 2%;
        background: rgba(255, 255, 255, 0.21);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
       
    }

    .card-text {
        /* width: auto; */
        height: 144px;
        font-family: 'Inter';
        font-style: normal;
        margin-top: 60px;
        font-size: 18px;
        line-height: 36px;
        text-align: center;
        color: #000000;
        margin: auto;
    }

    .cart {
        align-items: flex-start;
        
    }
</style>

<body style="margin: 0;font-family: 'Inter';">
    @include('site.nav')

    {{-- <section class="banniere">
        <div class="row container-fluid">

            <img src="/images/filles.jpg" alt="" srcset="">
            <div class="texte_centrer h3 row"
                style="
            position: absolute;
            color:white;
            width: 799px;
            height: 96px;
            display: flex;
            left: 30%;
            top: 30%;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            text-transform: uppercase;
            transform: translate(-50%, -50%);
          ">
                Trouvez le mentor qui vous fera grandir
            </div>
            <div class="texte"
                style="position: absolute;
            width: 618px;
            height: 60px;
            left: 9%;
            top: 40%;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 25px;
            line-height: 30px;
            text-transform: lowercase;
            
            color: #FFFFFF;
            ">
                Nos services de mentorat sont disponibles pour les filliéres scientifiques quels que soient votre
                âge...</div>
        </div>
    </section>
    <section class="carte" style="background-color: hsla(0, 0%, 100%, 0.835); margin-bottom: 20px;">
        <h4
            style="
        height: 48px;
        margin-top: 50px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        line-height: 48px;
        text-align: center;
        color: #000000;">
            Bénéficier des Avantages du mentorat</h4>
        <div style="display: flex; flex-direction: row; align-content: space-between; width: 100%">
            @for ($i = 0; $i < 4; $i++)
                <div class="card col-md-3  mb-3 style-card">
                    <div class=" style-card-header"></div>
                    <div class="card-body">
                        <p class="card-text" style="margin-top:30px;">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>
            @endfor
        </div>
    </section> --}}
</body>

</html>
