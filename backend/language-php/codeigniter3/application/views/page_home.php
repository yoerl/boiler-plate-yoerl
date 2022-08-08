<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <style>
        .bg-brand-color {
        background-color: #363BAB;
        }
    </style>

<style>
        .timeline-item {
            padding: 3em 2em 2em;
            position: relative;
            color: rgba(0, 0, 0, 0.7);
            border-left: 2px solid #5155B6
        }


        .timeline-br {
            border-left: 1px solid #5155B6
        }

        .timeline-item::after {
            width: 10px;
            height: 10px;
            display: block;
            top: 3em;
            position: absolute;
            left: -7px;
            border-radius: 10px;
            content: "";
            border: 2px solid rgba(0, 0, 0, 0.3);
            background: #5155B6;
        }
        /*그래프*/
        .group:hover .group-hover\:block {
            display: block;
        }
    </style>
</head>
<body>

<nav class="sticky top-0 z-50 flex md:flex-row-reverse justify-between bg-brand-color h-16 p-3">

<div class="px-3 py-2 bg-white rounded-full">
    <img src="/images/icon/person.svg">
</div>

<h1 class="text-2xl text-white">
    WinnerEye
</h1>
</button>
<button id="drawer-button" class="flex items-center px-3 py-3 border rounded border-teal-light" type="button"  data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    <svg class="h-4 w-4 fill-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
</button>
</nav>

<div id="drawer-navigation" class="overflow-y-auto fixed z-40 right- p-4 w-80 h-screen bg-brand-color" tabindex="-1" aria-labelledby="drawer-navigation-label" >
<button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation" id="drawer-close-button">
    <svg class="h-8 w-8 fill-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
</button>
<div class="overflow-y-auto py-4">
    <ul class="font-medium text-left " id="myTab" data-tabs-toggle="#myTabContent" role="tablist" >
        <li class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer"  data-tabs-target="#aboutCompany" type="button" role="tab" aria-controls="aboutCompany" aria-selected="false">
            <button class="w-full text-left" >
      <span class="text-white">
        회사소개
      </span>
            </button>
        </li>
        <li class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer" data-tabs-target="#companyHistory" type="button" role="tab" aria-controls="companyHistory" aria-selected="false">
            <button class="w-full text-left hover:bg-purple-900">
        <span class="text-white">
          회사연혁
        </span>
            </button>
        </li>
        <li>
            <button type="button" class="border-none flex items-center w-full py-5 pl-0 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-purple-900 " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <span class="text-white">공공기관 이미지 평가</span>
                <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                <li id="btn-media-statistics-daily" class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer"  data-tabs-target="#page-media-statistics-daily" type="button" role="tab" aria-controls="page-media-statistics-daily" aria-selected="false">
                    <span class="text-white">ㄴ 매체지수 (일별)</span>
                </li>
                <li class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer"  data-tabs-target="#page-media-statistics-week" type="button" role="tab" aria-controls="page-media-statistics-week" aria-selected="false">
                    <span class="text-white">ㄴ 매체지수 (주별)</span>
                </li>
                <li id="btn-image-evaluation-daily" class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer"  data-tabs-target="#page-image-evaluation-daily" type="button" role="tab" aria-controls="page-image-evaluation-daily" aria-selected="false">
                    <span class="text-white">ㄴ 이미지평가(일별)</span>
                </li>
                <li class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer"  data-tabs-target="#page-image-evaluation-week" type="button" role="tab" aria-controls="page-image-evaluation-week" aria-selected="false">
                    <span class="text-white">ㄴ 이미지평가(주별)</span>
                </li>
            </ul>
        </li>

        <li class="drawer-close py-5 hover:bg-purple-900 rounded-xl cursor-pointer" data-tabs-target="#way-to-come" type="button" role="tab" aria-controls="way-to-come" aria-selected="false">
            <button class="w-full text-left hover:bg-purple-900">
        <span class="text-white">
          오시는 길
        </span>
            </button>
        </li>
    </ul>
</div>
</div>


<!-- 본문 -->
<div id="myTabContent">
<!--회사소계-->
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="aboutCompany" role="tabpanel" aria-labelledby="aboutCompany-tab">
    <section class="w-screen h-screen flex flex-wrap justify-center pt-32">
        <!-- 메인 컨텐츠 -->
        <main class="w-11/12 h-96 flex flex-col items-center relative text-center">
            <div class="my-9">
                <h1 class="text-[2rem]">승자(Winner)의<br> 눈(Eye)으로 바라봅니다.</h1>
            </div>
            <div class="flex flex-wrap justify-center my-9">
                <img src="/images/macbookpro.png" class="w-5/12">
            </div>
            <div class="my-9">
                위너아이는 그동안 유선 및 오프라인으로 진행되던 <br>
                정치권의 지지율 및 정치 의견을 AI를 이용해 <br>
                정량적/정성적 분석후 실시간으로 지지율 정보를 제공합니다.
            </div>
        </main>
    </section>
</div>
<!--  회사연혁  -->

<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="companyHistory" role="tabpanel" aria-labelledby="companyHistory-tab">
    <div class="container">
        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021.02'>
                <p>
                    위너아이 설립(경기도 고양시)
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021. 05'>
                <p>
                    초기 투자 및 기업평가
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021. 06'>
                <p>
                    벤쳐기업인증
                </p>
            </div>
        </div>


        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021. 07'>
                <p>
                    1차 투자
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021. 08'>
                <p>
                    시스템 구축
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2021. 12'>
                <p>
                    여론조사 기관 등록
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2022. 03'>
                <p>
                    기관 및 CEO 평가시스템 구축(예정)
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2022. 06'>
                <p>
                    사옥 매입이전 및 연구소 설립(예정)
                </p>
            </div>
        </div>

        <div class="border-l-2 ml-8 timeline-br">
            <br>
        </div>

        <div style="background-color: #E1E1E1;" class="pl-8 rounded-xl">
            <div class="timeline-item" date-is='2022. 06'>
                <p>
                    금융업 진출(예정)
                </p>
            </div>
        </div>
    </div>
</div>

<!-- 공곻기간 이미지 평가 -->
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="page-media-statistics-daily" role="tabpanel" aria-labelledby="page-media-statistics-daily-tab">

    <section class="w-screen h-screen flex flex-col items-center">
        <div class="flex flex-col w-10/12">

            <div class="flex flex-row my-4 border-b-2 border-blue-400">
                <input type="text" class="w-full border-0" placeholder="기관명을 입력하세요">
                <img src="/images/icon/search.svg" class="w-10 h-10 p-1">
            </div>

            <p class="my-10">
                <scpan class="text-2xl font-bold">매체지수 모든 데이터 보기</scpan><br>
                (우측으로 넘겨서 보실 수 있습니다)
            </p>

            <article>
                <div class="flex flex-row rounded-lg bg-brand-color">
                    <div class="w-2/4 leading-10" style="color: white;">기관명</div>
                    <div class="w-1/4 leading-10" style="color: white;">22-07-22</div>
                    <div class="w-1/4 leading-10" style="color: white;">22-07-23</div>
                </div>
                <div class="flex flex-row h-10">
                    <div class="w-2/4 leading-10 text-xs">강릉원주대학교치과병원<br></div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                <div class="flex flex-row rounded-lg bg-slate-200">
                    <div class="w-2/4 leading-10 text-xs">강원대학교병원</div>
                    <div class="w-1/4 leading-10 text-xs">2</div>
                    <div class="w-1/4 leading-10 text-xs">3</div>
                </div>
                </div>
                
        </div>
        </article>

    </section>
</div>

<!-- 공곻기간 이미지 평가 -->
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="page-image-evaluation-daily" role="tabpanel" aria-labelledby="page-image-evaluation-daily-tab">

    <section class="w-screen h-screen flex flex-col items-center">
        <div class="flex flex-col w-10/12">

            <div class="flex flex-row my-4 border-b-2 border-blue-400">
                <input type="text" class="w-full border-0" placeholder="기관명을 입력하세요">
                <img src="/images/icon/search.svg" class="w-10 h-10 p-1">
            </div>

            <p class="my-10">
                <scpan class="text-2xl font-bold">모든 데이터 보기</scpan><br>
                (우측으로 넘겨서 보실 수 있습니다)
            </p>

            <article>
                <div class="flex flex-row rounded-lg bg-brand-color">
                    <div class="w-2/4 leading-10" style="color: white;">기관명</div>
                    <div class="w-1/4 leading-10 text-xs" style="color: white;">22-07-22(등급)</div>
                    <div class="w-1/4 leading-10 text-xs" style="color: white;">22-07-22(순위)</div>
                </div>

                <?$i = 0;?>
                <?php foreach($query as $row): ?>
                <?$i++;?>
                    <?if ( $i%2 == 0) {?>

                    <div class="flex flex-row rounded-lg bg-slate-200">
                        <div class="w-2/4 leading-10 text-xs"><?php echo $row['company'];?></div>
                        <div class="w-1/4 leading-10 text-xs"><?php echo $row['value'];?></div>
                        <div class="w-1/4 leading-10 text-xs">3</div>
                    </div>

                    <?} else {?>

                    <div class="flex flex-row rounded-lg">
                        <div class="w-2/4 leading-10 text-xs"><?php echo $row['company'];?></div>
                        <div class="w-1/4 leading-10 text-xs"><?php echo $row['value'];?></div>
                        <div class="w-1/4 leading-10 text-xs">3</div>
                    </div>

                    <?}?>
                <?php endforeach; ?>
                


                </div>
                
        </div>
        </article>

    </section>
</div>
<!-- 공곻기간 이미지 평가2 -->
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="page-media-statistics-week" role="tabpanel" aria-labelledby="page-media-statistics-week-tab">
    <section class="w-screen h-screen flex flex-col items-center">
        <div class="flex flex-col w-10/12">

            <div class="flex flex-row my-4 border-b-2 border-blue-400">
                <input type="text" class="w-full border-0" placeholder="기관명을 입력하세요">
                <img src="/images/icon/search.svg" class="w-10 h-10 p-1">
            </div>

            <p class="my-1 font-bold">
                공공기관이미지 이미지 평가란?
            </p>
            <p class="my-10">
                민간이 아닌 정치인, 공공기관, 사기업 등을 대상으로<br>
                뉴스, 댓글, 블로그 등의 자료를 통합적으로 분석하여<br>
                지수로 표현한 서비스 입니다.
            </p>

            <section class="h-96 my-16 border-2">
                <!-- Slider main container -->
                <div class="swiper h-full shadow-2xl">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper bg-red-200">
                        <!-- Slides -->
                        <div class="swiper-slide bg-blue-200">
                            <div class="flex flex-col items-center h-full w-full p-6 sm:p-8 bg-white rounded-lg">
                               <span class="text-sm font-semibold text-gray-500">2022.08</span>
                                <h2 class="text-xl font-bold">111.499</h2>
                                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">

                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                                        <!-- <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div> -->
                                        <span class="absolute bottom-0 text-xs font-bold"></span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                                        <!-- <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div> -->
                                        <span class="absolute bottom-0 text-xs font-bold"></span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">1주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                                        <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">2주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
                                        <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">3주차</span>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="swiper-slide">
                        <div class="flex flex-col items-center w-full h-full p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8">
                                <span class="text-sm font-semibold text-gray-500">2022.08</span>
                                <h2 class="text-xl font-bold">111.499</h2>
                                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">

                                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <!-- <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span> -->
                                        <!-- <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div> -->
                                        <!-- <span class="absolute bottom-0 text-xs font-bold">5주차</span> -->
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">1주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                                        <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">2주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
                                        <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">3주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">4주차</span>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="swiper-slide">

                            <div class="flex flex-col items-center w-full h-full p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8">
                                <span class="text-sm font-semibold text-gray-500">2022.08</span>
                                <h2 class="text-xl font-bold">111.499</h2>
                                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">

                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">1주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                                        <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">2주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                                        <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">3주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">4주차</span>
                                    </div>
                                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
                                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                                        <span class="absolute bottom-0 text-xs font-bold">5주차</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div> -->
                    <!-- <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </section>
            <p class="text-4xl text-center mb-14">
                APEC 기후센터
            </p>

            <button class="w-full bg-brand-color h-14 text-white rounded-xl font-bold mb-10" onclick="test();">
                매체지수 모든 데이터 보기
            </button>

    </section>
</div>

<!-- 공곻기간 이미지 평가2 -->
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="page-image-evaluation-week" role="tabpanel" aria-labelledby="page-image-evaluation-week-tab">
    <section class="w-screen h-screen flex flex-col items-center">
        <div class="flex flex-col w-10/12">

            <div class="flex flex-row my-4 border-b-2 border-blue-400">
                <input type="text" class="w-full border-0" placeholder="기관명을 입력하세요">
                
                <img src="/images/icon/search.svg" class="w-10 h-10 p-1">
            </div>

            <p class="my-1 font-bold">
                공공기관이미지 이미지 평가란?
            </p>
            <p class="my-10">
                민간이 아닌 정치인, 공공기관, 사기업 등을 대상으로<br>
                뉴스, 댓글, 블로그 등의 자료를 통합적으로 분석하여<br>
                지수로 표현한 서비스 입니다.
            </p>

            <section class="h-96 my-16">
                <!-- Slider main container -->
                <div class="swiper h-full shadow-2xl">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </section>
            <p class="text-4xl text-center mb-14">
                APEC 기후센터
            </p>

            <button class="w-full bg-brand-color h-14 text-white rounded-xl font-bold mb-10" onclick="test2();">
                이미지 평가 모든 데이터 보기
            </button>

    </section>
</div>


<!-- 공곻기간 이미지 오시는길 -->

<div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="way-to-come" role="tabpanel" aria-labelledby="way-to-come-tab">

    <section class="w-screen h-screen flex flex-wrap justify-center pt-8 overflow-y-scroll">
        <!-- 메인 컨텐츠 -->
        <article class="w-8/12 h-full flex flex-col items-center relative ">
            <figure class="my-6 border-2" onclick="window.open('https://map.kakao.com/link/to/경기 고양시 덕양구 성신로 97,37.62729067395597, 126.83954148029288', '_blank');">
                <div id="map" style="width:500px;height:400px;"></div>
            </figure>

            <div class="w-full text-center">
                <div class="text-left text-lg" style="color: #495965;">
                    찾아 오시는 길
                </div>
                <div class="rounded-lg" >
                    <div>
                        <header class="rounded-t-lg h-20" style="background-color: #363BAB; color:white">
                            T.02-11101111 <br>
                            F.02-2222-2222 <br>
                            서울 강남구 삼성동 11-11 6층
                        </header>
                    </div>


                    <div class="flex flex-row h-12 ">
                        <div class="border-b-2 w-3/4 flex flex-row justify-center items-center"><img src="/images/icon/subway.svg" class="mr-2 w-6">지하철</div>
                        <div class="border-b-2 w-3/4 flex flex-row justify-center items-center"><img src="/images/icon/bus.svg" class="mr-2 w-6">버스</div>
                        <div class="border-b-2 w-3/4 flex flex-row justify-center items-center"><img src="/images/icon/car.svg" class="mr-2 w-6">승용차</div>
                    </div>


                    <div class="flex flex-row text-xs text-center  h-20">
                        <div class="w-1/3">
                            선정릉역<br>
                            (9호선/분당선)<br>
                            2번출구 도보 <br>
                            5분거리
                        </div>
                        <div class="w-1/3">
                            삼성 2문화센터<br>
                            (23-212)<br>
                            라마다 서울 호텔앞<br>
                            (간선 351)
                        </div>
                        <div class="w-1/3">
                            서울 강남구 삼성동<br>
                            11-11 6층
                        </div>
                    </div>
                </div>
            </div>


        </article>
    </section>
</div>


<script>

function test(params) {
        $('#btn-media-statistics-daily').click();
    
}

function test2(params) {
        $('#btn-image-evaluation-daily').click();
}

    function drawerHidden(params) {
        $('#drawer-close-button').click();

    }

    document.querySelectorAll(".drawer-close").forEach(function(userItem) {
        userItem.addEventListener('click', drawerHidden);
    });


</script>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3b774e91e5f20bd3a0bf0d002b01b411">
</script>

<script>
    var container = document.getElementById('map');
    var KakaoOptions = {
        center: new kakao.maps.LatLng(37.62729067395597, 126.83954148029288),
        level: 3
    };


    var map = new kakao.maps.Map(container, KakaoOptions);


    // 마커가 표시될 위치입니다
    var markerPosition  = new kakao.maps.LatLng(37.62729067395597, 126.83954148029288);

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);


</script>


<script>
    var mySwiper = new Swiper ('.swiper', {
        // Optional parameters
        // direction: 'horizontal',
        // loop: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
</script>


<script>
    // set the drawer menu element
    const targetEl = document.getElementById('drawer-navigation');

    // options with default values
    const options = {
        placement: 'right',
        backdrop: true,
        bodyScrolling: false,
        edge: false,
        edgeOffset: '',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-30',
        onHide: () => {
            console.log('drawer is hidden');
        },
        onShow: () => {
            console.log('drawer is shown');
        },
        onToggle: () => {
            console.log('drawer has been toggled');
        }
    };

    const drawer = new Drawer(targetEl, options);
    // drawer.hide();
    // https://flowbite.com/docs/components/drawer/
    // drawer.show();
</script>
<script>
//       모바일 일경우 md: (min-width: 768px
    const media = matchMedia("screen and (min-width: 768px)")

    media.addListener((a) => {
        console.log(a);
        document.querySelector("#drawer-button").setAttribute('data-drawer-placement', 'right');

        console.log(document.querySelector("#drawer-button").getAttribute('data-drawer-placement'));
    })
</script>
</body>
</html>
