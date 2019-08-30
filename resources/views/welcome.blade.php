<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div class="flex flex-col">
    @if (Route::has('login') && false)
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline font-normal text-blue-700 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline font-normal text-blue-700 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline font-normal text-blue-700 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center container m-auto p-4 max-w-4xl">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-900 text-center font-bold text-5xl mb-4">
                    OMG 😲 PHP
                </h1>
                <p class="mb-10 text-center text-2xl">Resources for becoming a PHP developer.</p>

                <div class="mb-8 leading-normal">
                    <p><strong>What's this?</strong><br>A placeholder for a site which, once well-planned, will have real designs and marketing and stuff. By Matt Stauffer of Tighten, with the goals to
                    <strong>welcome newcomers into PHP in a healthy and friendly and easy-to-learn and safe way</strong>.</p>
                    <p class="mt-4">This site is <em>necessarily</em> opinionated. As such, it primarily reflects my opinion (Matt Stauffer) of what's best--and not best--for a new PHP developer to focus their time on today.</p>
                    <p class="mt-4">See sister site <a href="https://whyphp.dev/" class="text-blue-700 hover:underline">WhyPHP.dev</a> to consider why developers, bootcamps, and companies should consider PHP today.</p>
                </div>
                <ul>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Learn PHP for free</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://laracasts.com/series/php-for-beginners" class="no-underline hover:underline font-normal text-blue-700">Laracasts Video Series "The PHP Practitioner"</a></li>
                            <li><a href="https://daylerees.com/php-pandas/" class="no-underline hover:underline font-normal text-blue-700">PHP Pandas Online Book</a></li>
                            <li><a href="https://www.codecademy.com/learn/learn-php" class="no-underline hover:underline font-normal text-blue-700">Learn PHP at Codecademy</a></li>
                            <li><a href="https://exercism.io/tracks/php" class="no-underline hover:underline font-normal text-blue-700">Learn PHP at Exercism</a></li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Learn PHP (paid, recommended)</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://www.lynda.com/PHP-tutorials/Introducing-PHP/418256-2.html" class="no-underline hover:underline font-normal text-blue-700">Learn PHP at Lynda</a></li>
                            <li><a href="https://teamtreehouse.com/tracks/beginning-php" class="no-underline hover:underline font-normal text-blue-700">Learn PHP at Treehouse</a></li>
                            <li><a href="https://www.amazon.com/Beginning-PHP-MySQL-Novice-Professional/dp/1430260432" class="no-underline hover:underline font-normal text-blue-700">Beginning PHP and MySQL</a></li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Intermediate learning resources</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://phptherightway.com/" class="no-underline hover:underline font-normal text-blue-700">PHP the Right Way</a></li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Ask questions about PHP</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://stackoverflow.com/questions/tagged/php" class="no-underline hover:underline font-normal text-blue-700">StackOverflow PHP</a></li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Welcoming PHP organizations</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://osmihelp.org/" class="no-underline hover:underline font-normal text-blue-700">OSMI</a></li>
                            <li>?</li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">The Real World</div>

                        <ul class="ml-8 leading-normal list-disc">
                            <li><a href="https://meetup.com/topics/php" class="no-underline hover:underline font-normal text-blue-700">Find a meet-up</a></li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Places to be careful of</div>
                        <p class="leading-normal mb-4">PHP has been around a long enough time that, if you google "PHP", you're going to find a lot of resources that aren't great for modern PHP developers; sometimes because the code is old, but sometimes because the people aren't very friendly. These are a few places that might not be particularly helpful or welcoming for newcomers.</p>

                        <ul class="ml-8 leading-normal list-disc">
                            <li>r/php on Reddit (and many similar places like r/laravel): There are many wonderful people here but there are also many jerks. These can be great tools, but they've also been often known to drive people away. Approach with caution.</li>
                            <li>w3Schools: They are known for giving bad and outdated information. They've got great search engine placement but I'd avoid.</li>
                        </ul>
                    </li>
                    <li class="mb-8">
                        <div class="font-bold mb-2 text-lg">Frameworks and CMSes</div>
                        <p class="leading-normal mb-4">If you're learning PHP, there's a good chance there's a specific goal you have in mind: to join a team that works with a given tool, or just to learn the language that powers the majority of the Internet. But it's very unlikely that you'll just write PHP today. You'll almost definitely work with a framework or a CMS. Here are a few of the major players:</p>

                        <ul class="ml-8 leading-normal list-disc">
                            <li>
                                CMSes (Content Management Systems):
                                <ul class="ml-8 leading-normal list-disc">
                                    <li><a href="https://wordpress.org/" class="no-underline hover:underline font-normal text-blue-700">WordPress</a></li>
                                    <li><a href="https://www.joomla.org/" class="no-underline hover:underline font-normal text-blue-700">Joomla</a></li>
                                    <li><a href="https://www.drupal.org/" class="no-underline hover:underline font-normal text-blue-700">Drupal</a></li>
                                    <li>Others: CraftCMS, Statamic, OctoberCMS, ModX, Contao, Concrete5, SilverStripe, ExpressionEngine</li>
                                </ul>
                            </li>
                            <li>
                                Frameworks (ordered by popularity):
                                <ul class="ml-8 leading-normal list-disc">
                                    <li><a href="https://laravel.com/" class="no-underline hover:underline font-normal text-blue-700">Laravel</a></li>
                                    <li><a href="https://symfony.com/" class="no-underline hover:underline font-normal text-blue-700">Symfony</a></li>
                                    <li><a href="https://codeigniter.com/" class="no-underline hover:underline font-normal text-blue-700">CodeIgniter</a></li>
                                    <li><a href="https://www.yiiframework.com/" class="no-underline hover:underline font-normal text-blue-700">Yii</a></li>
                                    <li><a href="https://www.slimframework.com/" class="no-underline hover:underline font-normal text-blue-700">Slim</a></li>
                                    <li><a href="https://phalconphp.com/" class="no-underline hover:underline font-normal text-blue-700">Phalcon</a></li>
                                    <li><a href="https://cakephp.org/" class="no-underline hover:underline font-normal text-blue-700">CakePHP</a></li>
                                    <li><a href="https://framework.zend.com/" class="no-underline hover:underline font-normal text-blue-700">Zend</a></li>
                                </ul>
                            </li>
                            <li>
                                Other tools:
                                <ul class="ml-8 leading-normal list-disc">
                                    <li><a href="https://magento.com/" class="no-underline hover:underline font-normal text-blue-700">Magento</a> - build e-commerce web sites</li>
                                    <li><a href="https://en.wikipedia.org/wiki/MediaWiki" class="no-underline hover:underline font-normal text-blue-700">MediaWiki</a> - build wikis; same tool that powers Wikipedia</li>
                                    <li><a href="https://flarum.org/" class="no-underline hover:underline font-normal text-blue-700">Flarum</a> - Build forums</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="my-12">
                <a href="https://github.com/tightenco/omgphp" class="text-blue-700 hover:underline">Source on GitHub</a>
            </div>
        </div>

    </div>
</div>
</body>
</html>
