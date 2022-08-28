import React from 'react'

const NavListItem = ({targetUrl, title, isActive}) => {
  return (
	<li class="nav-item current"><a class="nav-link" href={targetUrl} >{title}</a></li>
  )
}

export default NavListItem