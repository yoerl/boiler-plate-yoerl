<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
  <style>
    .bg-brand-color {
      background-color: #363BAB;
    }
  </style>
</head>
<body>
  <section class="w-screen h-screen flex flex-wrap content-center justify-center">

    <!-- 메인 컨텐츠 -->
    <main class="w-11/12 h-96 flex flex-col  items-center relative">
          <h1 class="text-2xl text-white">WinnerEye</h1>
           
      <div class="relative h-12 w-80 rounded-lg bg-slate-100 my-3">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
        </div>
        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="아이디를 입력해주세요">
      </div>
      <div class="relative h-12 w-80 rounded-lg bg-slate-100 my-3">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
        </div>
        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="비밀번호를 입력해주세요">
      </div>

          <button data-modal-toggle="popup-modal" class="h-14 w-80 text-white text-2xl rounded-lg font-bold bg-brand-color my-3">
            로그인
          </button> 
          <div class="w-80 h-6 flex flex-row justify-between items-center text-xs">
            <div>
              <input type="checkbox" id="checked-checkbox" value="" class="w-3 h-3">
              <label for="checked-checkbox">아이디 저장</label>
            </div>
            <div>
              게스트로 입장하기
            </div>
          </div>
          <footer class="absolute bottom-0">
            <p class="text-[0.7rem] text-left w-80 my-4">
              본 사이트는 인증을 받은 사용자만 접속이 가능합니다.<br>
              접속이 안되시면 고객센터로 문의해주세요.
            </p>
            <article class="w-80 h-6 flex flex-row justify-between items-center text-xs">
              <article>
                접속하신IP: 117.224.333.212
              </article>
              <article>
                고객센터: 1588-1588
              </article>
            </article>
          </footer>
    </main>
  </section>

  
  <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 text-center">
                  <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <h1 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">로그인에 실패 하였습니다</h1>
                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">입력하신 계정을 확인 후 <br> 다시 시도해 주세요</h3>
                  <button data-modal-toggle="popup-modal" class="h-14 w-10/12 text-white text-2xl rounded-lg font-bold bg-brand-color my-3">
                    <a href="http://codeigniter/index.php/home">확인</a>
                  </button> 
              </div>
          </div>
      </div>
  </div>

</body>
</html>