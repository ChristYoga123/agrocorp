@extends('layouts.user.app')

@section('content')
        <nav class="fixed z-40 w-64 h-screen top-0 left-0 bg-[#159895]">
            <div class="flex p-4 mr-2">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 mr-6" alt="">
                <span class="text-white font-medium text-lg mr-4">Yoga Wibisono</span>
            </div>
            <div class="border-2 mb-4"></div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Akun Pelaku Agro</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g id="Navigation / House_03">
                                <path id="Vector" d="M2 20.0001H4M4 20.0001H10M4 20.0001V11.4522C4 10.9179 4 10.6506 4.06497 10.4019C4.12255 10.1816 4.21779 9.97307 4.3457 9.78464C4.49004 9.57201 4.69064 9.39569 5.09277 9.04383L9.89436 4.84244C10.6398 4.19014 11.0126 3.86397 11.4324 3.73982C11.8026 3.63035 12.1972 3.63035 12.5674 3.73982C12.9875 3.86406 13.3608 4.19054 14.1074 4.84383L18.9074 9.04383C19.3095 9.39568 19.5102 9.57202 19.6546 9.78464C19.7825 9.97307 19.877 10.1816 19.9346 10.4019C19.9995 10.6506 20 10.9179 20 11.4522V20.0001M10 20.0001H14M10 20.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V20.0001M14 20.0001H20M20 20.0001H22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        <span class="ml-3">Akun Mitra</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.1" d="M12 17H7C5.89543 17 5 16.1046 5 15V5C5 3.89543 5.89543 3 7 3H16C17.1046 3 18 3.89543 18 5V19C18 20.1046 17.1046 21 16 21C14.8954 21 14 20.1046 14 19C14 17.8954 13.1046 17 12 17Z" />
                        <path d="M19 3H9V3C7.11438 3 6.17157 3 5.58579 3.58579C5 4.17157 5 5.11438 5 7V10.5V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 17V19C14 20.1046 14.8954 21 16 21V21C17.1046 21 18 20.1046 18 19V9V4.5C18 3.67157 18.6716 3 19.5 3V3C20.3284 3 21 3.67157 21 4.5V4.5C21 5.32843 20.3284 6 19.5 6H18.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 21H5C3.89543 21 3 20.1046 3 19V19C3 17.8954 3.89543 17 5 17H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 7H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 11H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="ml-3">Formulir Pengajuan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="Communication / Chat_Circle_Dots">
                        <path id="Vector" d="M7.50977 19.8018C8.83126 20.5639 10.3645 21 11.9996 21C16.9702 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.6351 3.43604 15.1684 4.19819 16.4899L4.20114 16.495C4.27448 16.6221 4.31146 16.6863 4.32821 16.7469C4.34401 16.804 4.34842 16.8554 4.34437 16.9146C4.34003 16.9781 4.3186 17.044 4.27468 17.1758L3.50586 19.4823L3.50489 19.4853C3.34268 19.9719 3.26157 20.2152 3.31938 20.3774C3.36979 20.5187 3.48169 20.6303 3.62305 20.6807C3.78482 20.7384 4.02705 20.6577 4.51155 20.4962L4.51758 20.4939L6.82405 19.7251C6.95537 19.6813 7.02214 19.6591 7.08559 19.6548C7.14475 19.6507 7.19578 19.6561 7.25293 19.6719C7.31368 19.6887 7.37783 19.7257 7.50563 19.7994L7.50977 19.8018Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        <span class="ml-3">Forum</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="File / Archive">
                        <path id="Vector" d="M6.60035 9H17.4003M6.60035 9C6.04029 9 5.75957 9 5.54566 9.10899C5.3575 9.20487 5.20463 9.35774 5.10875 9.5459C4.99976 9.75981 4.99976 10.04 4.99976 10.6001V15.8001C4.99976 16.9202 4.99976 17.4804 5.21775 17.9082C5.40949 18.2845 5.71523 18.5905 6.09156 18.7822C6.51896 19 7.07875 19 8.19667 19H15.8025C16.9204 19 17.4794 19 17.9068 18.7822C18.2831 18.5905 18.5902 18.2844 18.782 17.9081C18.9998 17.4807 18.9998 16.9216 18.9998 15.8037V10.591C18.9998 10.037 18.9998 9.75865 18.8914 9.5459C18.7955 9.35774 18.6419 9.20487 18.4538 9.10899C18.2398 9 17.9604 9 17.4003 9M6.60035 9H4.97507C4.12597 9 3.70168 9 3.4607 8.85156C3.13911 8.65347 2.95678 8.29079 2.98902 7.91447C3.0132 7.63223 3.26593 7.29089 3.77222 6.60739C3.91866 6.40971 3.99189 6.31084 4.08152 6.23535C4.20104 6.1347 4.34286 6.06322 4.49488 6.02709C4.60889 6 4.73126 6 4.9773 6H19.0217C19.2677 6 19.3904 6 19.5044 6.02709C19.6564 6.06322 19.7982 6.1347 19.9177 6.23535C20.0074 6.31084 20.0809 6.40924 20.2273 6.60693C20.7336 7.29042 20.9867 7.63218 21.0109 7.91442C21.0432 8.29074 20.8602 8.65347 20.5386 8.85156C20.2976 9 19.8723 9 19.0232 9H17.4003M9.99976 14H13.9998" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        <span class="ml-3">Permintaan Barang</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.52786 16.7023C6.6602 18.2608 8.3169 19.3584 10.1936 19.7934C12.0703 20.2284 14.0409 19.9716 15.7434 19.0701C17.446 18.1687 18.766 16.6832 19.4611 14.8865C20.1562 13.0898 20.1796 11.1027 19.527 9.29011C18.8745 7.47756 17.5898 5.96135 15.909 5.02005C14.2282 4.07875 12.2641 3.77558 10.3777 4.16623C8.49129 4.55689 6.80919 5.61514 5.64045 7.14656C4.47171 8.67797 3.89482 10.5797 4.01579 12.5023M4.01579 12.5023L2.51579 11.0023M4.01579 12.5023L5.51579 11.0023" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="ml-3">Riwayat Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white hover:text-accent rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.9999 2C10.2385 2 7.99991 4.23858 7.99991 7C7.99991 7.55228 8.44762 8 8.99991 8C9.55219 8 9.99991 7.55228 9.99991 7C9.99991 5.34315 11.3431 4 12.9999 4H16.9999C18.6568 4 19.9999 5.34315 19.9999 7V17C19.9999 18.6569 18.6568 20 16.9999 20H12.9999C11.3431 20 9.99991 18.6569 9.99991 17C9.99991 16.4477 9.55219 16 8.99991 16C8.44762 16 7.99991 16.4477 7.99991 17C7.99991 19.7614 10.2385 22 12.9999 22H16.9999C19.7613 22 21.9999 19.7614 21.9999 17V7C21.9999 4.23858 19.7613 2 16.9999 2H12.9999Z" fill="currentColor"/>
                        <path d="M13.9999 11C14.5522 11 14.9999 11.4477 14.9999 12C14.9999 12.5523 14.5522 13 13.9999 13V11Z" fill="#000000"/>
                        <path d="M5.71783 11C5.80685 10.8902 5.89214 10.7837 5.97282 10.682C6.21831 10.3723 6.42615 10.1004 6.57291 9.90549C6.64636 9.80795 6.70468 9.72946 6.74495 9.67492L6.79152 9.61162L6.804 9.59454L6.80842 9.58848C6.80846 9.58842 6.80892 9.58778 5.99991 9L6.80842 9.58848C7.13304 9.14167 7.0345 8.51561 6.58769 8.19098C6.14091 7.86637 5.51558 7.9654 5.19094 8.41215L5.18812 8.41602L5.17788 8.43002L5.13612 8.48679C5.09918 8.53682 5.04456 8.61033 4.97516 8.7025C4.83623 8.88702 4.63874 9.14542 4.40567 9.43937C3.93443 10.0337 3.33759 10.7481 2.7928 11.2929L2.08569 12L2.7928 12.7071C3.33759 13.2519 3.93443 13.9663 4.40567 14.5606C4.63874 14.8546 4.83623 15.113 4.97516 15.2975C5.04456 15.3897 5.09918 15.4632 5.13612 15.5132L5.17788 15.57L5.18812 15.584L5.19045 15.5872C5.51509 16.0339 6.14091 16.1336 6.58769 15.809C7.0345 15.4844 7.13355 14.859 6.80892 14.4122L5.99991 15C6.80892 14.4122 6.80897 14.4123 6.80892 14.4122L6.804 14.4055L6.79152 14.3884L6.74495 14.3251C6.70468 14.2705 6.64636 14.1921 6.57291 14.0945C6.42615 13.8996 6.21831 13.6277 5.97282 13.318C5.89214 13.2163 5.80685 13.1098 5.71783 13H13.9999V11H5.71783Z" fill="currentColor"/>
                        </svg>
                        <span class="ml-3">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
@endsection
