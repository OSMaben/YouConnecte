@extends('layouts.layout')
@section('content')
    <div class="h-screen overflow-y-scroll bg-white" style="margin-top: 8rem">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 lg:gap-8">
            <div class="post p-5 lg:p-1 rounded-md">
                <div class="lg:fixed lg:top-14 lg:left-14 lg:w-3/12 md:fixed md:w-5/12" style="margin-top: 9rem;">
                   


                    <div class="bg-light p-8 rounded-lg shadow-md max-w-md w-full" > 
                        <h2 class="text-center mb-4">nouveau post</h2>


                        <form action="" method="">
                            <!-- Post Content Section -->
                            <div class="mb-6" >
                                <label for="postContent" class="block text-gray-700 text-sm font-bold mb-2">Post Content:</label>
                                <textarea id="postContent" name="postContent" rows="4" class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm
                                 sm:leading-5 resize-none focus:outline-none focus:border-blue-500" placeholder="What's on your mind?"></textarea>
                            </div>
                            <!-- File Attachment Section -->
                            <div class="mb-6">
                                <label for="fileAttachment" class="block text-gray-700 text-sm font-bold mb-2">telecharger image</label>
                                <div class="relative border-2 rounded-md px-4 py-3 bg-white flex items-center justify-between hover:border-blue-500 transition duration-150 ease-in-out">
                                    <input type="file" id="fileAttachment" name="fileAttachment" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="ml-2 text-sm text-gray-600">Choose a file</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button and Character Limit Section -->
                            <div class="flex items-center justify-between">
                                <button type="submit" class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2"> Post </button>
                            </div>
                        </form>
                    </div>




                </div>
            </div>




            {{-- cards --}}
            <div class="lg:col-span-2 p-4 bg-light mt-3" id="posted">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 "  >



                    <!-- First Column -->
                    <div class="bg-white p-8 rounded-lg shadow-md max-w-md">
                        <!-- User Info with Three-Dot Menu -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <img src="https://placekitten.com/40/40" alt="User Avatar" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-gray-800 font-semibold">John Doe</p>
                                    {{-- <p class="text-gray-500 text-sm">Posted 2 hours ago</p> --}}
                                </div>
                            </div>
                            <div class="text-gray-500 cursor-pointer">
                             

                                <div class="dropdown">
                                    <button class="btn btn-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical text-lg "></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">edit <i class="fa-solid fa-pen-to-square"></i></a>
                                      <a class="dropdown-item text-danger" href="#">delete <i class="fa-solid fa-trash"></i></a>
                                     
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="mb-4">
                            <p class="text-gray-800">Just another day with adorable kittens! 🐱 
                               
                            </p>
                        </div>
                        <!-- Image -->
                        <div class="mb-4">
                            <img src="https://placekitten.com/400/300" alt="Post Image" class="w-full h-48 object-cover rounded-md">
                        </div>
                        <!-- Like and Comment Section -->
                        <div class="flex items-center justify-between text-gray-500">
                            <div class="flex items-center space-x-2">
                                <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C6.11 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-4.11 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                    <span>42 Likes</span>
                                </button>
                            </div>
                            <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                                <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"></path>
                                    </g>
                                </svg>
                                <span>3 Comment</span>
                            </button>
                        </div>
                    </div>




                
                    
                    
                </div>
            </div>
        </div>
    </div>


@endsection
