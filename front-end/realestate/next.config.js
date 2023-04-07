/** @type {import('next').NextConfig} */

const webpack = require('webpack');
const nextConfig = {
  reactStrictMode: true,
  
}

module.exports = {nextConfig, 
  images: {
      domains: ['localhost'],
    },
  }
 