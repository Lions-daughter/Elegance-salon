<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Elegance Salon</title>
  <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="shortcut icon" href="assets/css/styles.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --pmcolor: #f1f0f9;
  --sdcolor: #fefefe;
  --ttcolor: #2e2e2e;
}

html,
body {
  width: 100%;
  height: 100vh;
  font-family: "Poppins", sans-serif;
  color: var(--ttcolor);
  background-color: var(--pmcolor);
}

a {
  color: inherit;
  text-decoration: none;
}

section {
  width: 90%;
  margin: 2rem auto;
  display: grid;
  gap: 0.75rem;
  grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
}

.card {
  width: 100%;
  cursor: default;
  padding: 1.25rem;
  border-radius: 0.25rem;
  background-color: var(--sdcolor);
  transition: transform 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-0.5rem);
}

.card-img {
  width: 100%;
  height: 15rem;
  overflow: hidden;
  position: relative;
  border-radius: 0.25rem;
}

.card-img img {
  width: 100%;
  height: 100%;
  display: block;
  object-fit: cover;
  object-position: center;
}

.card-img figcaption {
  background-color: var(--ttcolor);
  color: var(--sdcolor);
  font-size: 0.85rem;
  padding: 0.5rem;
  width: 100%;
  position: absolute;
  bottom: 0;
}

.card-title {
  text-transform: capitalize;
  margin: 0.75rem 0;
}

  </style>
 
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">