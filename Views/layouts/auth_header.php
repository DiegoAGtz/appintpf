<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="apple-touch-icon" sizes="180x180" href="<?= URL::file('Icons/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= URL::file('Icons/favicon-32x32.png')?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= URL::file('Icons/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?= URL::file('Icons/site.webmanifest') ?>">


  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
  <link rel="stylesheet" href="Views/css/app.css">
</head>
<body>
  <a href="<?= URL::get("Page", "index") ?>" class="fixed flex px-5 my-5 mx-10 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 transition duration-150 ease-in">
        <span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd">
                </path>
            </svg>
        </span>
        <span class="ml-2 uppercase">Volver a inicio</span>
    </a>
<div class="min-h-screen flex flex-col items-center justify-center bg-trueGray-900" style="background-image: url(<?= URL::file('Icons/backgroundTopography.svg') ?>);">

