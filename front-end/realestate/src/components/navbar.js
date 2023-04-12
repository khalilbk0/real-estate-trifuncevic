import React, { useEffect } from 'react'
import Link from 'next/link'
import { useState } from 'react' 
function NavbarComponent() {

  
  const [Toggled, setToggled] = useState(false)
  useEffect(() => {
    
  }, [Toggled])
  return (
    <div class="navbar">
    <div class="container-nav">
      <div class="nav-wrapper">
        <div class="logo">
          <img src="assets/nav-logo.png" alt="navbar logo" />
        </div>
        <ul class="nav-links" style={{listStyleType:"none"}}>
           <li class=""><Link className='nav-item'  style={{textDecoration:"none"}} href={'/home'}>POČETNA</Link></li>
          <li class=""><Link className='nav-item'  style={{textDecoration:"none"}} href={'/'}>STANOVI</Link></li>
          <li class=""><Link className='nav-item'  style={{textDecoration:"none"}} href={'/offices'}>LOKALI</Link></li>
          <li class=""><Link className='nav-item'  style={{textDecoration:"none"}} href={'/garages'}>GARAŽE</Link></li>
    
          <li class="nav-item">KONTAKT</li>
        </ul>
        <img src="assets/menu.png" class="burger" alt="burger menu" onClick={() => {
          setToggled(true)
          console.log("ok")
        }} />
      </div>
      <div class="res-nav"></div>
    </div>
{   Toggled==true &&  
    <ul class="nav-links-res ">
      <li class="close-btn">
        <img src="assets/close.png" alt="close button" onClick={() => {
          setToggled(false)
          console.log("ok2")
        }} />
        Zatvorite
      </li>
      <li class="res-item nav-item"><Link className='nav-item'  style={{textDecoration:"none"}} href={'/home'}>POČETNA</Link></li>
      <li class="res-item nav-item"><Link className='nav-item'  style={{textDecoration:"none"}} href={'/'}>STANOVI</Link></li>
       <li class="res-item nav-item"><Link className='nav-item'  style={{textDecoration:"none"}} href={'/offices'}>LOKALI</Link></li> 
      <li class="res-item nav-item"><Link className='nav-item'  style={{textDecoration:"none"}} href={'/garages'}>GARAŽE</Link></li>
      <li class="res-item nav-item"><Link className='nav-item'  style={{textDecoration:"none"}} href={'/contact'}>KONTAKT</Link></li>
    </ul>  }
  </div>
  )
}

export default NavbarComponent