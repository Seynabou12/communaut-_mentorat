    <style>
        header {
            height: 90px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
            max-width: 96wh;
            margin-bottom: 0px;
            position: fixed;
        }

        .nav {
            margin-right: 140px;
        }

        .brand {
            font-weight: bold;
            font-size: 20px;
        }

        .nav__wrapper {
            list-style: none;
            margin-left: 0;
            padding-left: 0;
            text-decoration: none;
        }

        .nav__wrapper li a {
            margin-bottom: 15px;
            text-decoration: none;
            color: black;
            margin-left: 12px;
        }

        .site-header {
            position: relative;
        }

        .site-header__wrapper {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        @media (min-width: 600px) {
            .site-header__wrapper {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-top: 0;
                padding-bottom: 0;
            }
        }

        @media (min-width: 600px) {
            .nav__wrapper {
                display: flex;
            }
        }

        @media (max-width: 599px) {
            .nav__wrapper {
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                z-index: -1;
                background-color: #f9f9fa;
                box-shadow: 1ch;
                visibility: hidden;
                opacity: 0;
                transform: translateY(-100%);
                transition: transform 0.3s ease-out, opacity 0.3s ease-out;
            }

            .nav__toggle li {
                text-decoration: none;
            }

            .nav__wrapper.active {
                visibility: visible;
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav__item a {
            display: block;
            padding: 1.5rem 1rem;
        }

        .nav__toggle {
            display: none;
        }

        @media (max-width: 599px) {
            .nav__toggle {
                display: block;
                position: absolute;
                right: 1rem;
                top: 1rem;
                border: solid rgba(0, 0, 0, 0.0)
                
            }
        }

        .wrapper img {
            width: 120px;
            height: 60px;
            margin-left: 50px;
            margin-bottom: 15px;
        }
    </style>
    <!-- Header Start -->
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <a href="#" class="brand"><img src="/images/wim-sbg.png" alt="" srcset=""
                    style="margin-top: -10px;"></a>
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button" style="width: 50px; height: 50px;">
                    menu
                </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="/">Accueil</a></li>
                    <li class="nav__item"><a href="/mentors/create">Devenir Mentor</a></li>
                    
                    <li class="nav__item"><a href="/mentores/create">Devenir Mentoré</a></li>
                    <li class="nav__item"><a href="#">Questions/Reponses</a></li>
                    <li class="nav__item">
                        <a href="{{ route('auth.formLogin') }}">
                            <button type="submit" class="btn"
                                style="background-color: #C15DFB; color: white; height: 45px; width: 130px; border-radius: 20px; border: solid 0 gray; margin-top: -30px; margin-left: 10px;">Connexion</button></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <script>
        let navToggle = document.querySelector(".nav__toggle");
        let navWrapper = document.querySelector(".nav__wrapper");

        navToggle.addEventListener("click", function() {
            if (navWrapper.classList.contains("active")) {
                this.setAttribute("aria-expanded", "false");
                this.setAttribute("aria-label", "menu");
                navWrapper.classList.remove("active");
            } else {
                navWrapper.classList.add("active");
                this.setAttribute("aria-label", "close menu");
                this.setAttribute("aria-expanded", "true");
            }
        });
    </script>
