$(document).ready(function () {
    createModal()
    let button_comms
    let button_rt
    button_comms = document.querySelectorAll('#comms')
    button_rt = document.querySelectorAll('#retweet')
    let myModal = document.getElementById('myLoginModal')
    let closeModal = document.getElementById('closeLoginModal')
    let path_comms = document.querySelectorAll('#path_comms')
    let path_retweet = document.querySelectorAll('#path_retweet')
    let input_response = document.getElementById('input_response')

    for (let i = 0; i < button_comms.length; i++) {
        button_comms[i].addEventListener('click', function () {
            path_comms[i].setAttribute('stroke', '#1DA1F2')
            let id_response = button_comms[i].className
            // input_response.innerHTML = id_response
            input_response.value = id_response
            console.log(input_response)
            myModal.classList.remove('hidden');
        })
        
        button_rt[i].addEventListener('click', function () {
            path_retweet[i].setAttribute('stroke', 'lightgreen')
        })
        
        closeModal.addEventListener('click', function () {
            myModal.classList.add('hidden');
            setTimeout(() => {
                path_comms[i].setAttribute('stroke', 'currentColor')
            }, 500);
        });
    }

    7
    function createModal() {
        let main = document.getElementById('tweet')
        const modal = $(`<div id="myLoginModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Post your comment
                        </h3>
                        <button type="button" id="closeLoginModal"
                            class="end-2.5 text-red-400 bg-transparent hover:bg-gray-200 hover:text-red-400 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" method="POST" action="">
                            <div>
                                <label for="comment"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    comment</label>
                                <input type="text" name="comment" id="input_comment"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="What do you think about ?" required />
                                <input type="text" name="id_response" id="input_response" class="hidden"/>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>`)[0]
        main.appendChild(modal)
    }
})