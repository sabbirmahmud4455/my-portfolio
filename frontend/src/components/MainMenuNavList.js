import React from 'react'
import NavListItem from './NavListItem'

const MainMenuNavList = () => {
  return (
	<div>
		<ul class="primary-menu nav nav-pills">
			<NavListItem 
			targetUrl={'url'}
			title={'Home'}
			isActive={true}
			
			/>
			<NavListItem 
			targetUrl={'url'}
			title={'Home'}
			isActive={true}
			
			/>
			<NavListItem 
			targetUrl={'url'}
			title={'Home'}
			isActive={true}
			
			/>
			<NavListItem 
			targetUrl={'url'}
			title={'Home'}
			isActive={true}
			
			/>
		</ul>
	</div>
  )
}

export default MainMenuNavList