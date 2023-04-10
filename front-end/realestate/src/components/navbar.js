import React from 'react'
import Link from 'next/link'
function NavbarComponent() {
  return (
    <div class="navbar">
    <div class="container-nav">
      <div class="nav-wrapper">
        <div class="logo">
          <img src="assets/nav-logo.png" alt="navbar logo" />
        </div>
        <ul class="nav-links">
          <li class="nav-item">POČETNA</li>
          <li class="nav-item">STANOVI</li>
          <li class="nav-item"><Link className='nav-item'  href={'/offices'}>LOKALI</Link></li>
          <li class="nav-item">GARAŽE</li>
          <li class="nav-item">KONTAKT</li>
        </ul>
        <img src="assets/menu.png" class="burger" alt="burger menu" />
      </div>
      <div class="res-nav"></div>
    </div>

    <ul class="nav-links-res none">
      <li class="close-btn">
        <img src="assets nav/close.png" alt="close button" />
        Zatvorite
      </li>
      <li class="res-item nav-item">POČETNA</li>
      <li class="res-item nav-item">STANOVI</li>
       <li class="res-item nav-item"><Link  href={'/offices'}>LOKALI</Link></li> 
      <li class="res-item nav-item">GARAŽE</li>
      <li class="res-item nav-item">KONTAKT</li>
    </ul>
  </div>
  )
}

export default NavbarComponent