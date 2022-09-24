<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @media (min-width: 1264px) {
        .container {
            max-width: 1185px;
        }
    }
</style>

<body style="background-color:rgb(245, 244, 244) ">
    @include('site.header')

    <main  class="v-main pa-0 ma-0" 
        style="padding: 100px 0px 0px;margin: 0!important;padding: 0!important;     display: flex;
            flex: 1 0 auto;
            max-width: 100%;
            transition: .2s cubic-bezier(.4,0,.2,1);"
        data-booted="true">
        <div class="v-main__wrap" style="flex: 1 1 auto;
                max-width: 100%;
                    margin-top: -10%;
                position: relative;">
            <div   class="container container--desktop"
                style="width: 1200px;
                    margin: 20px auto;
                    margin-top: 200px;
                    background: #ffff;
                    padding-top: 74px;
                    padding-bottom: 78px!important;">
                <div  class="text-center" style="text-align: center!important;"><img
                         src="/images/wave.svg">
                    <h2 
                        style="font-family: Poppins;
                            font-style: normal;
                            font-weight: 700;
                            font-size: 40px;
                            line-height: 54px;
                            text-align: center;
                            color: #000;">
                        Hello !</h2>
                </div>
                <div data-v-05f441a2="" class="v-card v-sheet theme--light card--desktop"
                    style="background: rgba(255, 255, 255, 0.911);
                        box-shadow: none!important;
                        margin-bottom: 25px;  border-width: thin;
                        display: block;
                        max-width: 100%;
                        outline: none;
                        text-decoration: none;
                        transition-property: box-shadow,opacity;
                        word-wrap: break-word;
                        position: relative;
                        white-space: normal;">
                    <div data-v-05f441a2="" class="text" style="font-family: Roboto;
                            font-style: normal;
                            font-weight: 400;
                            font-size: 16px;margin: 23px 25px 18px;
                            line-height: 20px;
                            color: #000;
                            text-align: center;">
                            <h4>Pour bien commencer, dites-nous si vous êtes ...</h4>
                    </div>
                    <div data-v-05f441a2="" class="button-wrapper--desktop" style="margin-top: 56px; height: 215px;display: flex;flex-direction: row;justify-content: center;text-align: center;">
                        <div  onclick="selection('choix1')" class="button--desktop"
                            style="text-transform: uppercase;
                                        font-family: Roboto;
                                        font-style: normal;
                                        font-weight: 500;
                                        font-size: 16px;
                                        line-height: 24px;
                                        margin-right: 44px;">
                            <div  id="choix1" onclick="selection('choix1')" class="img-wrapper"
                                style=" width: 200px;
                                        height: 183px;
                                        background: #fff;
                                        border: 1px solid #C15DFB;
                                        box-sizing: border-box;
                                        margin: auto;">
                                <img  src="/images/kk.svg"
                                    alt="etudiant" class="img-svg" style="height: 183px;width: 183px;">
                            </div>
                            <p style="margin-top: 10px;"> Étudiant.e </p>
                           
                        </div>
                        <div  onclick="selection('choix2')" class="button--desktop"
                                style="font-weight: 500;
                                        font-size: 16px;
                                        line-height: 24px;
                                        margin-right: 44px;">
                            <div  id="choix2" onclick="selection('choix2')" class="img-wrapper"
                                    style=" width: 200px;
                                        height: 183px;
                                        background: #fff;
                                        border: 1px solid #000;
                                        box-sizing: border-box;
                                        margin: auto;">
                                <img style="height: 183px;width: 183px;" 
                                    src="/images/tt.svg" alt="mentor" class="img-svg">
                            </div>
                            <p style="margin-top: 10px;">MENTOR</p>
                        </div>
                    </div>
                </div>
                <div  onclick="etape()" class="continue--disabled active" style="width: 152px; 
                        height: 33px;
                        border-radius: 3px;
                        margin: auto;
                        font-size: 16px;
                        line-height: 33px;
                        text-align: center; background: #C15DFB;
                        cursor: pointer; font-family: Roboto;
                        font-style: normal;
                        font-weight: 400;">
                    <p style="color: white;">Prochaine étape</p>
                    
                </div>
            </div>
        </div>
    </main>

    @include('site.footer')
    
    <script>
        var choix= 1;
        
        function selection(id)
        {
            if (id=="choix1") {
                document.getElementById(id).style.border="1px solid #C15DFB";
                document.getElementById("choix2").style.border="1px solid #000";
                choix=1;
            }else{
                document.getElementById(id).style.border="1px solid #C15DFB";
                document.getElementById("choix1").style.border="1px solid #000";
                choix=2;
            }
        }

        function etape(){
            if (choix==1) {
                document.location.href= document.location.origin + "/mentores/create";
            }else{
                document.location.href= document.location.origin + "/mentors/create";
            }
            
        }
        
    </script>
</body>

</html>
