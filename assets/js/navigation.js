/**
 * The First — Navigation
 * Enhances keyboard accessibility for the core/navigation block.
 */
( function () {
	'use strict';

	/**
	 * Close all open submenus except the one that contains the given element.
	 */
	function closeOtherSubmenus( except ) {
		document.querySelectorAll( '.wp-block-navigation-item.is-active' ).forEach( function ( item ) {
			if ( ! item.contains( except ) ) {
				item.classList.remove( 'is-active' );
				const btn = item.querySelector( '.wp-block-navigation-submenu__toggle' );
				if ( btn ) btn.setAttribute( 'aria-expanded', 'false' );
			}
		} );
	}

	/**
	 * Arrow-key navigation inside a submenu.
	 */
	function handleSubmenuKeydown( e, submenu ) {
		const focusable = Array.from(
			submenu.querySelectorAll( 'a, button, [tabindex]:not([tabindex="-1"])' )
		);
		const idx = focusable.indexOf( document.activeElement );

		if ( e.key === 'ArrowDown' ) {
			e.preventDefault();
			const next = focusable[ idx + 1 ] || focusable[ 0 ];
			next && next.focus();
		} else if ( e.key === 'ArrowUp' ) {
			e.preventDefault();
			const prev = focusable[ idx - 1 ] || focusable[ focusable.length - 1 ];
			prev && prev.focus();
		} else if ( e.key === 'Escape' ) {
			const toggle = submenu.closest( '.wp-block-navigation-item' )
				?.querySelector( '.wp-block-navigation-submenu__toggle' );
			if ( toggle ) {
				toggle.focus();
				toggle.setAttribute( 'aria-expanded', 'false' );
			}
		}
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		const navItems = document.querySelectorAll(
			'.wp-block-navigation-item.has-child'
		);

		navItems.forEach( function ( item ) {
			const toggle  = item.querySelector( '.wp-block-navigation-submenu__toggle' );
			const submenu = item.querySelector( '.wp-block-navigation__submenu-container' );

			if ( ! toggle || ! submenu ) return;

			// Arrow-down on the toggle opens and focuses first item
			toggle.addEventListener( 'keydown', function ( e ) {
				if ( e.key === 'ArrowDown' ) {
					e.preventDefault();
					closeOtherSubmenus( item );
					const first = submenu.querySelector( 'a, button' );
					if ( first ) first.focus();
				}
			} );

			// Arrow keys inside the submenu
			submenu.addEventListener( 'keydown', function ( e ) {
				handleSubmenuKeydown( e, submenu );
			} );
		} );

		// Close submenus when clicking outside
		document.addEventListener( 'click', function ( e ) {
			if ( ! e.target.closest( '.wp-block-navigation-item.has-child' ) ) {
				closeOtherSubmenus( null );
			}
		} );
	} );
} )();
