<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

  <head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <!--[if mso]>
    <xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml>
    <style>
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
  <![endif]-->
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700" rel="stylesheet" media="screen">
    <style>
      .hover-underline:hover {
        text-decoration: underline !important;
      }

      @keyframes spin {
        to {
          transform: rotate(360deg);
        }
      }

      @keyframes ping {

        75%,
        100% {
          transform: scale(2);
          opacity: 0;
        }
      }

      @keyframes pulse {
        50% {
          opacity: .5;
        }
      }

      @keyframes bounce {

        0%,
        100% {
          transform: translateY(-25%);
          animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }

        50% {
          transform: none;
          animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
      }

      @media (max-width: 600px) {
        .sm-leading-32 {
          line-height: 32px !important;
        }

        .sm-px-24 {
          padding-left: 24px !important;
          padding-right: 24px !important;
        }

        .sm-py-32 {
          padding-top: 32px !important;
          padding-bottom: 32px !important;
        }

        .sm-w-full {
          width: 100% !important;
        }
      }
    </style>
  </head>

  <body style="margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; --bg-opacity: 1; background-color: #eceff1;">
    <div style="display: none;">@yield('header')</div>
    <div role="article" aria-roledescription="email" aria-label="Default email title" lang="en">
      <table style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td align="center" style="--bg-opacity: 1; background-color: #eceff1; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;" bgcolor="rgba(236, 239, 241, var(--bg-opacity))">
            <table class="sm-w-full" style="font-family: 'Montserrat',Arial,sans-serif; width: 600px;" width="600" cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <td class="sm-py-32 sm-px-24" style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; padding: 48px; text-align: center;" align="center">
                  <a href="{{env('APP_URL')}}}}">
                    <!-- <img src="images/logo.png" width="155" alt="{{env('APP_NAME')}} logo" style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle;"> -->
                    <img width="155" alt="{{env('APP_NAME')}} logo" style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJoAAABaCAMAAAB3yb+RAAACzVBMVEUAAAAA//8A/4BVqqpAv4AzzJkr1apJ25JA3585xqozzJku0aJA1ZU72J0326QzzJlAz5880qU51Zw216FAzJk9zp460aI305s11Z891qM7zp050KE30Zs+05481aI61pw4z58+0aI80p4606A51Zw3z5880KE70Z050p8406I91Z470KA60Zw50p8306E81J061Z850KE40Z480qA705061J850KE80Z470Z860qE505441KA80J070Z871KE40p4606A50Z870qE70p8606A505480Z870aA60p450p8506E705860aA60Z450p8706A705460Z850Z450p870qA605850aA70Z460p860p4505870Z460p860qA705860Z460Z850qA70p46058606A50Z850Z870p460p8606A505470Z860qA50p8705470Z860aA60p450p870qA60Z850p470p860qA605850aA70p860p860p4505870aA60Z460p850qA70p8605860Z460p850qA70p86058606A50Z870p860p460p8606A50Z860p860qA50p8705460Z860qA60p870p860qA605860Z870p860qA70p460p860p860p4505860aA60p860p850p470p8605860p860p870qA60p860p860Z450p860p860p860p8606A70Z860p860p460p850p8605860p860qA60p860p860p460Z860p870p860p860qA60p850p860p460p860p860p8605860qA60p860p860p860Z860p860p860qA60p860p860p870p860p860p860p8606A60p860p860p860p860p860p860p860qA50p860p860p860p860p860p860p860qA60p860p860p860p////9VBJ3CAAAA7XRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRobHB0eHyAhIiMkJSYnKCkqKywtLi8wMTIzNDU2Nzg5Ojs8PUFERkhJSktMTU5PUFFSU1RVVldYWVpbXV5fYGFiZGVmaGlqa2xtbm9wcXJzdHV2eHl6e3x9foCBgoOFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnqChoqOkpaanqKqrrq+wsbKztLW2t7i5uru8vb6/wMHCw8TFxsfIycrLzM3Oz9DR0tPU1dbX2Nna29zd3+Dh4uPk5ebn6Onq6+zt7u/w8fLz9PX29/j5+vv8/f7AuuWxAAAAAWJLR0Tuz7fSNwAABmlJREFUaN7Nm+lfVGUUx3/DIqKQoA4jIpIKGOHGkmBiWS65ZGWJiTmZ4ZKRmkuaWmpmmZYt5lJq4RpUmlJWKmaRFm5EhqWQojiAwHj+h14wwNyZe5/lzuXSecU8z++c8/3Mc+fZ7gFotMQFR0pqqMWcl3/aMDwQppstNT1K0ZCwk9Ss1O5nKldwzq9ERBeXhTU32etIw/Z3MpEspbQpbcVwV9MbpG1FnU0jG+poSdswAQCQTSwraGfWU3bFPa0jAUD/eiYaLTIJ7R1l2r0A9rHJqKqbOT8Bh0feXkgkni01BW2EZ9rpWMhFKzIFzeuJX43DXDSKdHl3TMuy2599qI9k0qjh0+etmDs5NZipmu+ZdRNK+GjpABD82jmn6/PlraP8RbmS1xU3hak9OKOLtnCqZ9YlqOGjjQNgyVM0lb3QXgRsVKEyUs36KC3pQM+so8Eno6cAPOrZeGksFyzuiMrvPUfrC7+gFN7oIIq227v54w5sMrtDNdohm7o8Uyl7GYJolnKV9uOsGc9/rVa4871UHfz2KGIHi6LFqHacjdAks3ygHa8kUtUl1G2yKOoOUbQU9Z5ToVpoK1kBT6r/hgKXVzf2128MgTDaMI2ubRpkY+4wI76t4dZ99p5fTufNd82cvqHRFPUUFeyId4aKTD0+olVGqwXlbRmo0AL4B7UuGuVbvGNm8WOOBDC7ldHI7hUyupIf8wsAnz5sBFqGdu/NGM95I08gZkMkMLOsa+ui0UGPIbWTiE0BUulzA9DuZ/VPVwSMuSGEthkIqKVprYx2K1Z2OInoZwDn6VZfn9GGMAXfuZ2knxMjoyoA+UQnAn1FS2crspvD9aoSRKNgYDsRveorWhpb4Yhr2j58I0pGnYCNROR8wEe0wRxJgWtInxcmoxBgLRFRaZhvaPfxNHMkh5OqAbxLRES7fENL5WaKB+BXIP6lFQPY0vhnZuui0Q/+wBxxMtoJwHV2qIr1BS2Fr3oR8dUSaLMAlDVNPv4+oCXzVTWJRyXIKB7o1rzfXOwDWpKA7JoM2TEAk5o/1Q/RjzaIDLapALa1fLwQqhttoMFkpe2AMPdz6ke60QYYjDYRQI6i5TG9aP2NJcsHcPdNRdP1njrR+hlKdqOnympb4P9/QJsGYKZX60v60BKNJPvaorra1g3WhXav0cN5RO2eJkQPWoLBU9pc1Z4NetDuMY7sSwvQV2O1fUQHWl/DyCqjAb9vNTrLI+XR4g1DywIwT+yawmS0fQASGFfbM9sMrbIHEHCcIagd0FZomQAWMxWng9sGbS+AgbfZmrVtgnY9Cggo5IjujJBDizMEbRKApVzVFZv5aHsAJNXxdQcsZqNVdAOCikSUdrPRJgJYIaR0XW2ZhpYLIK1BTHvIVLRyGxD8u6h6jDharM9ojwNYI6w+YSJaLoChTnF9mmlo5TagwzkJhzel0XYV60ObAOAtGYcSWbSKiPQGPWQ7AMQ5pVyiJdEygdd1kF2NAIADUj5jRNH6EBFRHoD2v8mjjW98Eyl1lTRHal5z9AaA5DpZsu2u5XqyjNNyqRPVrMYMy2WH09q0y9kt4bVO5vR+zHUpIbZEew4nAFivinutkrjEqh/UlCFJaki3uh1EnhR3WyhxK/lKS4ZlEmSXFRWNu2ROEWJoKVTsVgAReFIcbZziQB4hPKSDhV8EOTMUtUm3RTNs9qyyEPRztBN+6bhemWGJ6HCGe16a7RBz3C+8UPXxuKEOPCWWYaTXLWiXv4UcnxZG87IBQkOqdq89VuhYGKofDYsEHMvC1Ty3CniuBIBamTnTzZg3Fy5Tr+MIu8R1vNYVgHCtpJclcEsZ39cqU+RmnAEAEHiFGSVYE+phf2qWtm/keOY1npEXc8nOaCTwY5dN1A3TfKke9CPT84JVo7JTbXuibtY/WG7ZjAoO6xmG4z/NtR/5HLLqHpoZYhgP6hJmTU6k9rxYGt+sSuLs9pcxMsRqnWKcCzgFYCFaC/1h9wLUHCbZUWYB3F2fqTr9O4Jf05elth935AQoRO8xyM7aOBlGl3o77bRBwDqv8XwZVLfJ6/XeLM0xzQ/nZuiYfVHhUv9JsmiBeNjs793KPYvmq81SqQdVwf6yC5Wh+2WsKnTNv5dyn7FKldVbRy/6MPervVuWPqFZHZ624qRyl+c4u2V8e/EUAb1THszo16W1/hshKLzFQtHm9h+ncVLIaCLpGgAAAABJRU5ErkJggg==" />
                  </a>
                </td>
              </tr>
              <tr>
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                  <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                        
                        @yield('content')
                        
                        <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="font-family: 'Montserrat',Arial,sans-serif; padding-top: 32px; padding-bottom: 32px;">
                              <div style="--bg-opacity: 1; background-color: #eceff1; height: 1px; line-height: 1px;">&zwnj;</div>
                            </td>
                          </tr>
                        </table>
                        <p style="margin: 0 0 16px;">
                          Not sure why you received this email? Please
                          <a href="mailto:support@example.com" class="hover-underline" style="--text-opacity: 1; color: #7367f0; text-decoration: none;">let us know</a>.
                        </p>
                        <p style="margin: 0 0 16px;">Thanks, <br>The {{env('APP_NAME')}} Team</p>
                      </td>
                    </tr>
                    <tr>
                      <td style="font-family: 'Montserrat',Arial,sans-serif; height: 20px;" height="20"></td>
                    </tr>
                    <tr>
                      <td style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 12px; padding-left: 48px; padding-right: 48px; --text-opacity: 1; color: #eceff1; ">
                        <p align="center" style="cursor: default; margin-bottom: 16px;">
                          <a href="https://www.facebook.com/pixinvents" style="--text-opacity: 1; color: #263238; text-decoration: none;"><img src="images/facebook.png" width="17" alt="Facebook" style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                          &bull;
                          <a href="https://twitter.com/pixinvents" style="--text-opacity: 1; color: #263238; text-decoration: none;"><img src="images/twitter.png" width="17" alt="Twitter" style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                          &bull;
                          <a href="https://www.instagram.com/pixinvents" style="--text-opacity: 1; color: #263238;  text-decoration: none;"><img src="images/instagram.png" width="17" alt="Instagram" style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                        </p>
                        <p style="--text-opacity: 1; color: #263238;">
                          Use of our service and website is subject to our
                          <a href="https://pixinvent.com/" class="hover-underline" style="--text-opacity: 1; color: #7367f0; text-decoration: none;">Terms of Use</a> and
                          <a href="https://pixinvent.com/" class="hover-underline" style="--text-opacity: 1; color: #7367f0; text-decoration: none;">Privacy Policy</a>.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td style="font-family: 'Montserrat',Arial,sans-serif; height: 16px;" height="16"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>

</html>