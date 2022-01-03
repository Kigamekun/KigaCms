<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubTemplate;
class subTemplateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubTemplate::create([
            'name'=>'Catalog',
            'template_id'=>1,
            'code'=>'
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>


            <body>
                <style>
                    @import url("https://fonts.googleapis.com/css2?family=Hind&family=Montserrat:wght@700&display=swap");

                    :root {
                        --text-font: "Hind", sans-serif;
                        --title-font: "Montserrat", sans-serif;
                        --dark: #151515;
                        --grey: #717171;
                        --light-gray: #a1a1a1;
                        --faded-gray: #e1e1e1;
                    }

                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: var(--text-font);
                    }

                    img {
                        width: 100%;
                        vertical-align: top;
                    }

                    .card {
                        text-align: center;
                    }

                    .card__img {
                        margin-bottom: 30px;
                    }

                    .card__title {
                        font-family: var(--title-font);
                        text-transform: capitalize;
                        color: var(--dark);
                        line-height: 35px;
                        font-size: 24px;
                    }

                    .card__text {
                        font-family: var(--text-font);
                        color: var(--grey);
                        font-size: 16px;
                        line-height: 26px;
                        margin-bottom: 20px;
                    }

                    .card__readbtn {
                        font-family: var(--text-font);
                        font-size: 14px;
                        text-transform: uppercase;
                        color: var(--light-gray);
                        text-decoration: none;
                        line-height: 26px;
                        transition: all ease 0.3s;
                        position: relative;
                    }

                    .card__readbtn::after {
                        content: "";
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        width: 0;
                        height: 2px;
                        background-color: var(--dark);
                        transition: all ease 0.3s;
                    }

                    .card__readbtn:hover {
                        color: var(--dark);
                    }

                    .card__readbtn:hover::after {
                        width: 100%;
                    }

                    .divider {
                        background-color: var(--faded-gray);
                        height: 2px;
                        max-width: 30px;
                        margin: 15px auto 20px;
                    }

                    .grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 35px;
                        max-width: 1300px;
                        margin: 50px auto;
                        padding: 0 10px;
                    }
                </style>


                <div class="grid">
                    <div class="card">
                        <div class="card__img">
                            <img src="https://images.unsplash.com/photo-1572449043416-55f4685c9bb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">
                        </div>
                        <div class="card__contenido">
                            <h3 class="card__title">
                                How To Start A Business With FOOD
                            </h3>
                            <div class="divider"></div>
                            <p class="card__text">
                                In the Victorian age people’s attitude to food changed: it became less important. In the twentieth
                                century two world wars meant that some of the recipes for good old English...
                            </p>
                            <a href="#" class="card__readbtn">read more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Zm9vZHxlbnwwfDJ8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="card__contenido">
                            <h3 class="card__title">
                                FOOD Adventures
                            </h3>
                            <div class="divider"></div>
                            <p class="card__text">
                                Five o’clock tea is a national habit. English people have tea with biscuits, apple pie, fruit or
                                fruit salad or sandwiches.At about seven or eight o’clock they have dinner or supper...
                            </p>
                            <a href="#" class="card__readbtn">read more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <img src="https://images.unsplash.com/photo-1516714435131-44d6b64dc6a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGZvb2R8ZW58MHwyfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="card__contenido">
                            <h3 class="card__title">
                                Its All About (The) FOOD
                            </h3>
                            <div class="divider"></div>
                            <p class="card__text">
                                Another reason for the decline in British cooking was the increase in popularity of fast food, a
                                style of food imported from the USA in the 1960s. People wanted to eat quickly....
                            </p>
                            <a href="#" class="card__readbtn">read more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">
                        </div>
                        <div class="card__contenido">
                            <h3 class="card__title">
                                13 Myths About FOOD
                            </h3>
                            <div class="divider"></div>
                            <p class="card__text">
                                For breakfast English people often have porridge with milk and sugar. They don’t eat much bread.
                                They usually have toasts. They enjoy drinking strong tea with milk...
                            </p>
                            <a href="#" class="card__readbtn">read more</a>
                        </div>
                    </div>
                </div>


            </body>

            </html>'
        ]);
    }
}
