import React from 'react'
import { useEffect, useState } from 'react'
function Hero({title,text,img}) {
const [backgroundImage, setbackgroundImage] = useState('')

    useEffect(() => {
       setbackgroundImage(img)
    }, [img])
    


  return (
    <div><div className="px-4 py-5 my-5 text-center herSection" style={{backgroundImage: `url(${backgroundImage})`}}>
      <h1 className="display-5 fw-bold">{title}</h1>
    <div className="col-lg-6 mx-auto">
     {/*  <p className="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
 */}   {/*    <div className="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" className="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" className="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div> */}
    </div>
  </div></div>
  )
}

export default Hero