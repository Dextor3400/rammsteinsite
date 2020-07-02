<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon-32.png' />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Rammstein</title>
</head>

<body>
    <div class="wrapper-fluid wrapper-navbar">
        <nav class="navbar-dark bg-dark">
            <div class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <a href="/" class="navbar-brand">
                    <img width="40px" height="40px" src="/images/small_logo.png" class="img-fluid" alt="rammstein">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navNavbarDropdown"
                    aria-controls="navNavbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navNavbarDropdown" class="navbar-collapse collapse text-center text-lg-start pb-0">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item hvrcenter">
                            <a class="nav-link hvrcenter hvr-grow" href="index.php">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvrcenter hvr-grow" href="news.php">
                                NEWS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvrcenter hvr-grow" href="music.php">
                                MUSIC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvrcenter hvr-grow" href="videos.php">
                                VIDEOS
                            </a>
                        </li>
                        <li class="nav-item hvrcenter hvr-grow">
                            <a class="nav-link" href="tour.php">
                                TOUR
                            </a>
                        </li>
                        <div class="d-flex justify-content-center">
                            <li class="nav-item px-1">
                                <a class="nav-link hvrcenter hvr-grow" href="https://www.facebook.com/Rammstein/"
                                    target="_blank">
                                    <i class="fa fa-facebook px-1" style="font-size:24px"></i>
                                </a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="nav-link hvrcenter hvr-grow" target="_blank"
                                    href="https://www.instagram.com/rammsteinofficial/?hl=hu">
                                    <i class="fa fa-instagram px-1" style="font-size:24px"></i>
                                </a>
                            </li>
                            <li class="nav-item px-1 ">
                                <a class="nav-link hvrcenter hvr-grow"
                                    href="https://open.spotify.com/artist/6wWVKhxIU2cEi0K81v7HvP" target="_blank">
                                    <i class="fa fa-spotify px-1" aria-hidden="true" style="font-size:24px"></i>
                                </a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="nav-link hvrcenter hvr-grow" target="_blank"
                                    href="https://www.youtube.com/channel/UCYp3rk70ACGXQ4gFAiMr1SQ">
                                    <i class="fa fa-youtube-play px-1" style="font-size:24px"></i>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron news-jumbotron text-white has-bg-img p-0"
            style="background-color: rgba(6, 6, 6, 0.74);;
            background-size: cover; height: 60vh;">
            <div class="" style="height: 100px;"></div>
            <div class="container mt-5">
                  <div class="d-lg-flex text-center justify-content-center">
                      <div class="mr-lg-5">
                          <img class="mx-auto my-auto d-block"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABWVBMVEX////8+/sAAAAfAADlzLL49fTkyrEiAADgx6vPq4r48/HjyavgwKI7AADZtI3r1r7auZjJoH7n0rns3MbOrY/aup3bvaPv5t7r39fjxqv+8PD85+b5fGz/iXH/moL/o5L+29mYAADdHCP8emX/jXL9vbi2t7ZdAACpEB7pOjj7blqWlZVtAAi3HSblIhzhw8UVAADQMTLxVk23AADLsrSnKyrmRD92CRLLBwjs09XU1NNQAACMABTu4uM0AATSPj2gBhalAAArAABBOzpwb26/HiiiABKCgoGSKimreFptNSWQAAh1TUKuqad5Lg6ORy+6k3i0hWGvdVOeXje0dUmLQiSlaU24hGNbDQDHv76tbEqYY0N2KQBkJwlpOCrFlm1lSEB9OxiDSDFVEwBBFAVhLhd3WVSUe3Oii3+MZVKVdmGCXEO7rKFwPCqyjGu+oYd7bFmsl4LHsZ75tsroAAAEM0lEQVR4nO3b/XrTNhgFcDtVVWl2Ylu2xMyAjXVLaANbUzZgCbTQDbaUuCRN1mIK/YCyfqVh4/7/mHsRerTn3fldwTmPFUmOZM8DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4D7t+3XUCu766cfPW19+4TmHT7W8Xb9767nvXMexptu4sLS7eWPZdB7GmvXD33tLy8g8/ug5iTXvl7p3O6ur9n1wHsaZda/3cebB0n+4zLBYePry32nn0i+sg1nRrvcedxeVHT1wHsWa+ttZaf7r+jG5Dr7bRe7zeeUl4X/PrWu9p58Ezwg1/25h73ll/QXfF936v1/5Yf95yHcOidn+z/rI1cB3DomLr1bA/ylzHsKjob2shtesYFrXHEyFiSXmmGU9ilsdfuM5hT/vPSRzw8JrrHPYUvUmDhcGXrnPYU9QnYZAHqesc9jTnDhpByLjrHPYU9e1qlHLCDZsb46phnrvOYU+zt5MEYRC6zmFPs/5ql0VR7DqHPc3XScKCqEF3U9Ns7Wqhophuw3JrMwuZotxwvDOJVUq54dZOkgdRTrdhd+uNDFlKeKYp997IoGpI9/Wp2xvKBosINyzfzpI4oNyw+3aHeMP5dzsHMelR6u1vJ9WK35h3ncOewcFBtR5Sbng4qn6HpJ/h/u5VQ8K7Nu+waqgY5Yb7I9lQivCubX5tJDUThBt2j4ZZLALCo9R/negkVA3XOSza01oKRvnw6X2mtSLd8NLEJk0T1zEsWshCk0bSdQx7/AXJdMo03VHq1yXnqSJ8VcF/F0c8FYSvKvgfJGfVKHWdwx7/Q8LzSBjXOSw6ljmn3fBjwhUj3fCvJFeMU254khilNOFzfO9kZlQqCN828U5nMVOC8I0h72QUsygj3fAgY8xQbngqtVKccsPzUVwtiJQbnmWGR7QbXh3MKMoNz6WunqFyHcMe/yLLeJQKuueH/oWRPIoY4WvQR5nJVRrS/SH6R9pUL4g54YYXRueMckNvILkOKI9Sb5DoRvUMCc801YqvWRQTfobnM50HEeWPZs6lZCwK6a743mFSzaWK8qddA2lyoULC92kuZBYzpek29M+kkYJ6Qy0iwg2984zLkGWEZ5ozbRLDNOH18NSYRCvKDc8M12GkKe/ahOaCU363mIrEiJzyKJ2amRAsJt2wz7kylBtme1woym/AZTZmPKV8+FSO9qpRSvkAcbrXvzrIJ9ywGL/PeE55pim2LjNBuuF0fDETnPRcOtvsi5zyrq38dNlXjPIRaTn82Gc55YbN4XGS5pTPD4vh8SdlFOWG/YWqYU74n6hyWBuqnHTD/spIkf43cbo9N2I6o/u9hTedrfCUG8oNtzey1HDCDQt5nKWkb7IX2fHnVFG+513+Pfjn2mfCmzbPe9Ity67rEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP9v/wKG0XuLLwBwEgAAAABJRU5ErkJggg=="
                              alt="">
                      </div>
                      <div>
                          <div class="d-none d-lg-block" style="height: 80px;"></div>
                          <h5 class="h5 mt-4 mt-lg-0">Rammstein</h5>
                          <h6 class="h6 mr-lg-3">Available Maj 17</h6>
                          <a class="btn btn-primary rounded-pill mr-lg-3" href="">Listen/Buy</a>
                      </div>
                  </div>
            </div>
        </div>
        <div class="container">
            <div class="d-lg-flex">
                <div class="col-12 col-lg-3">
                    <img class="mx-auto my-auto d-block"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABWVBMVEX////8+/sAAAAfAADlzLL49fTkyrEiAADgx6vPq4r48/HjyavgwKI7AADZtI3r1r7auZjJoH7n0rns3MbOrY/aup3bvaPv5t7r39fjxqv+8PD85+b5fGz/iXH/moL/o5L+29mYAADdHCP8emX/jXL9vbi2t7ZdAACpEB7pOjj7blqWlZVtAAi3HSblIhzhw8UVAADQMTLxVk23AADLsrSnKyrmRD92CRLLBwjs09XU1NNQAACMABTu4uM0AATSPj2gBhalAAArAABBOzpwb26/HiiiABKCgoGSKimreFptNSWQAAh1TUKuqad5Lg6ORy+6k3i0hWGvdVOeXje0dUmLQiSlaU24hGNbDQDHv76tbEqYY0N2KQBkJwlpOCrFlm1lSEB9OxiDSDFVEwBBFAVhLhd3WVSUe3Oii3+MZVKVdmGCXEO7rKFwPCqyjGu+oYd7bFmsl4LHsZ75tsroAAAEM0lEQVR4nO3b/XrTNhgFcDtVVWl2Ylu2xMyAjXVLaANbUzZgCbTQDbaUuCRN1mIK/YCyfqVh4/7/mHsRerTn3fldwTmPFUmOZM8DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4D7t+3XUCu766cfPW19+4TmHT7W8Xb9767nvXMexptu4sLS7eWPZdB7GmvXD33tLy8g8/ug5iTXvl7p3O6ur9n1wHsaZda/3cebB0n+4zLBYePry32nn0i+sg1nRrvcedxeVHT1wHsWa+ttZaf7r+jG5Dr7bRe7zeeUl4X/PrWu9p58Ezwg1/25h73ll/QXfF936v1/5Yf95yHcOidn+z/rI1cB3DomLr1bA/ylzHsKjob2shtesYFrXHEyFiSXmmGU9ilsdfuM5hT/vPSRzw8JrrHPYUvUmDhcGXrnPYU9QnYZAHqesc9jTnDhpByLjrHPYU9e1qlHLCDZsb46phnrvOYU+zt5MEYRC6zmFPs/5ql0VR7DqHPc3XScKCqEF3U9Ns7Wqhophuw3JrMwuZotxwvDOJVUq54dZOkgdRTrdhd+uNDFlKeKYp997IoGpI9/Wp2xvKBosINyzfzpI4oNyw+3aHeMP5dzsHMelR6u1vJ9WK35h3ncOewcFBtR5Sbng4qn6HpJ/h/u5VQ8K7Nu+waqgY5Yb7I9lQivCubX5tJDUThBt2j4ZZLALCo9R/negkVA3XOSza01oKRvnw6X2mtSLd8NLEJk0T1zEsWshCk0bSdQx7/AXJdMo03VHq1yXnqSJ8VcF/F0c8FYSvKvgfJGfVKHWdwx7/Q8LzSBjXOSw6ljmn3fBjwhUj3fCvJFeMU254khilNOFzfO9kZlQqCN828U5nMVOC8I0h72QUsygj3fAgY8xQbngqtVKccsPzUVwtiJQbnmWGR7QbXh3MKMoNz6WunqFyHcMe/yLLeJQKuueH/oWRPIoY4WvQR5nJVRrS/SH6R9pUL4g54YYXRueMckNvILkOKI9Sb5DoRvUMCc801YqvWRQTfobnM50HEeWPZs6lZCwK6a743mFSzaWK8qddA2lyoULC92kuZBYzpek29M+kkYJ6Qy0iwg2984zLkGWEZ5ozbRLDNOH18NSYRCvKDc8M12GkKe/ahOaCU363mIrEiJzyKJ2amRAsJt2wz7kylBtme1woym/AZTZmPKV8+FSO9qpRSvkAcbrXvzrIJ9ywGL/PeE55pim2LjNBuuF0fDETnPRcOtvsi5zyrq38dNlXjPIRaTn82Gc55YbN4XGS5pTPD4vh8SdlFOWG/YWqYU74n6hyWBuqnHTD/spIkf43cbo9N2I6o/u9hTedrfCUG8oNtzey1HDCDQt5nKWkb7IX2fHnVFG+513+Pfjn2mfCmzbPe9Ity67rEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP9v/wKG0XuLLwBwEgAAAABJRU5ErkJggg=="
                        alt="">
                    <div class="d-flex justify-content-center mt-2">
                        <a class="btn btn-primary btn-lg-block rounded-pill" href="">Listen/Buy</a>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="display-4">
                        Rammstein
                    </div>
                    <div class="mb-3">
                        Released 2019.05.17
                    </div>
                    <div>
                        <table class="table table-hover">
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-1">01.</td>
                                    <td class="col-11">Radio</td>
                                </tr>                                
                                <tr class="d-flex">
                                    <td class="col-1">02.</td>
                                    <td class="col-11">Zeig Dich</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">03.</td>
                                    <td class="col-11">AusLander</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">04.</td>
                                    <td class="col-11">Puppe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">05.</td>
                                    <td class="col-11">Was ich liebe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">06.</td>
                                    <td class="col-11">Diamant</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">07.</td>
                                    <td class="col-11">Tattoo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex mt-5">
                <div class="col-12 col-lg-3">
                    <img class="mx-auto my-auto d-block"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABWVBMVEX////8+/sAAAAfAADlzLL49fTkyrEiAADgx6vPq4r48/HjyavgwKI7AADZtI3r1r7auZjJoH7n0rns3MbOrY/aup3bvaPv5t7r39fjxqv+8PD85+b5fGz/iXH/moL/o5L+29mYAADdHCP8emX/jXL9vbi2t7ZdAACpEB7pOjj7blqWlZVtAAi3HSblIhzhw8UVAADQMTLxVk23AADLsrSnKyrmRD92CRLLBwjs09XU1NNQAACMABTu4uM0AATSPj2gBhalAAArAABBOzpwb26/HiiiABKCgoGSKimreFptNSWQAAh1TUKuqad5Lg6ORy+6k3i0hWGvdVOeXje0dUmLQiSlaU24hGNbDQDHv76tbEqYY0N2KQBkJwlpOCrFlm1lSEB9OxiDSDFVEwBBFAVhLhd3WVSUe3Oii3+MZVKVdmGCXEO7rKFwPCqyjGu+oYd7bFmsl4LHsZ75tsroAAAEM0lEQVR4nO3b/XrTNhgFcDtVVWl2Ylu2xMyAjXVLaANbUzZgCbTQDbaUuCRN1mIK/YCyfqVh4/7/mHsRerTn3fldwTmPFUmOZM8DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4D7t+3XUCu766cfPW19+4TmHT7W8Xb9767nvXMexptu4sLS7eWPZdB7GmvXD33tLy8g8/ug5iTXvl7p3O6ur9n1wHsaZda/3cebB0n+4zLBYePry32nn0i+sg1nRrvcedxeVHT1wHsWa+ttZaf7r+jG5Dr7bRe7zeeUl4X/PrWu9p58Ezwg1/25h73ll/QXfF936v1/5Yf95yHcOidn+z/rI1cB3DomLr1bA/ylzHsKjob2shtesYFrXHEyFiSXmmGU9ilsdfuM5hT/vPSRzw8JrrHPYUvUmDhcGXrnPYU9QnYZAHqesc9jTnDhpByLjrHPYU9e1qlHLCDZsb46phnrvOYU+zt5MEYRC6zmFPs/5ql0VR7DqHPc3XScKCqEF3U9Ns7Wqhophuw3JrMwuZotxwvDOJVUq54dZOkgdRTrdhd+uNDFlKeKYp997IoGpI9/Wp2xvKBosINyzfzpI4oNyw+3aHeMP5dzsHMelR6u1vJ9WK35h3ncOewcFBtR5Sbng4qn6HpJ/h/u5VQ8K7Nu+waqgY5Yb7I9lQivCubX5tJDUThBt2j4ZZLALCo9R/negkVA3XOSza01oKRvnw6X2mtSLd8NLEJk0T1zEsWshCk0bSdQx7/AXJdMo03VHq1yXnqSJ8VcF/F0c8FYSvKvgfJGfVKHWdwx7/Q8LzSBjXOSw6ljmn3fBjwhUj3fCvJFeMU254khilNOFzfO9kZlQqCN828U5nMVOC8I0h72QUsygj3fAgY8xQbngqtVKccsPzUVwtiJQbnmWGR7QbXh3MKMoNz6WunqFyHcMe/yLLeJQKuueH/oWRPIoY4WvQR5nJVRrS/SH6R9pUL4g54YYXRueMckNvILkOKI9Sb5DoRvUMCc801YqvWRQTfobnM50HEeWPZs6lZCwK6a743mFSzaWK8qddA2lyoULC92kuZBYzpek29M+kkYJ6Qy0iwg2984zLkGWEZ5ozbRLDNOH18NSYRCvKDc8M12GkKe/ahOaCU363mIrEiJzyKJ2amRAsJt2wz7kylBtme1woym/AZTZmPKV8+FSO9qpRSvkAcbrXvzrIJ9ywGL/PeE55pim2LjNBuuF0fDETnPRcOtvsi5zyrq38dNlXjPIRaTn82Gc55YbN4XGS5pTPD4vh8SdlFOWG/YWqYU74n6hyWBuqnHTD/spIkf43cbo9N2I6o/u9hTedrfCUG8oNtzey1HDCDQt5nKWkb7IX2fHnVFG+513+Pfjn2mfCmzbPe9Ity67rEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP9v/wKG0XuLLwBwEgAAAABJRU5ErkJggg=="
                        alt="">
                    <div class="d-flex justify-content-center mt-2">
                        <a class="btn btn-primary btn-lg-block rounded-pill" href="">Listen/Buy</a>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="display-4">
                        Rammstein
                    </div>
                    <div class="mb-3">
                        Released 2019.05.17
                    </div>
                    <div>
                        <table class="table table-hover">
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-1">01.</td>
                                    <td class="col-11">Radio</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">02.</td>
                                    <td class="col-11">Zeig Dich</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">03.</td>
                                    <td class="col-11">AusLander</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">04.</td>
                                    <td class="col-11">Puppe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">05.</td>
                                    <td class="col-11">Was ich liebe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">06.</td>
                                    <td class="col-11">Diamant</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">07.</td>
                                    <td class="col-11">Tattoo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex mt-5">
                <div class="col-12 col-lg-3">
                    <img class="mx-auto my-auto d-block"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABWVBMVEX////8+/sAAAAfAADlzLL49fTkyrEiAADgx6vPq4r48/HjyavgwKI7AADZtI3r1r7auZjJoH7n0rns3MbOrY/aup3bvaPv5t7r39fjxqv+8PD85+b5fGz/iXH/moL/o5L+29mYAADdHCP8emX/jXL9vbi2t7ZdAACpEB7pOjj7blqWlZVtAAi3HSblIhzhw8UVAADQMTLxVk23AADLsrSnKyrmRD92CRLLBwjs09XU1NNQAACMABTu4uM0AATSPj2gBhalAAArAABBOzpwb26/HiiiABKCgoGSKimreFptNSWQAAh1TUKuqad5Lg6ORy+6k3i0hWGvdVOeXje0dUmLQiSlaU24hGNbDQDHv76tbEqYY0N2KQBkJwlpOCrFlm1lSEB9OxiDSDFVEwBBFAVhLhd3WVSUe3Oii3+MZVKVdmGCXEO7rKFwPCqyjGu+oYd7bFmsl4LHsZ75tsroAAAEM0lEQVR4nO3b/XrTNhgFcDtVVWl2Ylu2xMyAjXVLaANbUzZgCbTQDbaUuCRN1mIK/YCyfqVh4/7/mHsRerTn3fldwTmPFUmOZM8DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4D7t+3XUCu766cfPW19+4TmHT7W8Xb9767nvXMexptu4sLS7eWPZdB7GmvXD33tLy8g8/ug5iTXvl7p3O6ur9n1wHsaZda/3cebB0n+4zLBYePry32nn0i+sg1nRrvcedxeVHT1wHsWa+ttZaf7r+jG5Dr7bRe7zeeUl4X/PrWu9p58Ezwg1/25h73ll/QXfF936v1/5Yf95yHcOidn+z/rI1cB3DomLr1bA/ylzHsKjob2shtesYFrXHEyFiSXmmGU9ilsdfuM5hT/vPSRzw8JrrHPYUvUmDhcGXrnPYU9QnYZAHqesc9jTnDhpByLjrHPYU9e1qlHLCDZsb46phnrvOYU+zt5MEYRC6zmFPs/5ql0VR7DqHPc3XScKCqEF3U9Ns7Wqhophuw3JrMwuZotxwvDOJVUq54dZOkgdRTrdhd+uNDFlKeKYp997IoGpI9/Wp2xvKBosINyzfzpI4oNyw+3aHeMP5dzsHMelR6u1vJ9WK35h3ncOewcFBtR5Sbng4qn6HpJ/h/u5VQ8K7Nu+waqgY5Yb7I9lQivCubX5tJDUThBt2j4ZZLALCo9R/negkVA3XOSza01oKRvnw6X2mtSLd8NLEJk0T1zEsWshCk0bSdQx7/AXJdMo03VHq1yXnqSJ8VcF/F0c8FYSvKvgfJGfVKHWdwx7/Q8LzSBjXOSw6ljmn3fBjwhUj3fCvJFeMU254khilNOFzfO9kZlQqCN828U5nMVOC8I0h72QUsygj3fAgY8xQbngqtVKccsPzUVwtiJQbnmWGR7QbXh3MKMoNz6WunqFyHcMe/yLLeJQKuueH/oWRPIoY4WvQR5nJVRrS/SH6R9pUL4g54YYXRueMckNvILkOKI9Sb5DoRvUMCc801YqvWRQTfobnM50HEeWPZs6lZCwK6a743mFSzaWK8qddA2lyoULC92kuZBYzpek29M+kkYJ6Qy0iwg2984zLkGWEZ5ozbRLDNOH18NSYRCvKDc8M12GkKe/ahOaCU363mIrEiJzyKJ2amRAsJt2wz7kylBtme1woym/AZTZmPKV8+FSO9qpRSvkAcbrXvzrIJ9ywGL/PeE55pim2LjNBuuF0fDETnPRcOtvsi5zyrq38dNlXjPIRaTn82Gc55YbN4XGS5pTPD4vh8SdlFOWG/YWqYU74n6hyWBuqnHTD/spIkf43cbo9N2I6o/u9hTedrfCUG8oNtzey1HDCDQt5nKWkb7IX2fHnVFG+513+Pfjn2mfCmzbPe9Ity67rEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP9v/wKG0XuLLwBwEgAAAABJRU5ErkJggg=="
                        alt="">
                    <div class="d-flex justify-content-center mt-2">
                        <a class="btn btn-primary btn-lg-block rounded-pill" href="">Listen/Buy</a>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="display-4">
                        Rammstein
                    </div>
                    <div class="mb-3">
                        Released 2019.05.17
                    </div>
                    <div>
                        <table class="table table-hover">
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-1">01.</td>
                                    <td class="col-11">Radio</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">02.</td>
                                    <td class="col-11">Zeig Dich</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">03.</td>
                                    <td class="col-11">AusLander</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">04.</td>
                                    <td class="col-11">Puppe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">05.</td>
                                    <td class="col-11">Was ich liebe</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">06.</td>
                                    <td class="col-11">Diamant</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">07.</td>
                                    <td class="col-11">Tattoo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="text-center mt-5 pt-5" ;">
            Copyright © RAMMSTEIN 2020
        </footer>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="/js/script.js"></script>

</html>