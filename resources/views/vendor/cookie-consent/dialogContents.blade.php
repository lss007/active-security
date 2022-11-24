{{-- <div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 items-center hidden md:inline cText">
                    <p class="ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto cookiesRightBtns">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="cookie-consent" class="cookie-consent" style="display:none;">
  <!--- etc. -->

<div class="js-cookie-consent " >
    <div class="container">
      <div class="row gy-2 align-items-center">  
        <div class="col-sm">
          <div class="cText">
            <p>{!! trans('cookie-consent::texts.message') !!}</p>
          </div>
        </div>
        <div class="col-sm-auto">
          <ul class="cookiesRightBtns">
            <li><a href="javascript:void(0)" class="cookiesCloseTrigger" >Decline</a></li>
            <li><a href="javascript:void(0)" class="js-cookie-consent-agree cookiesCloseTrigger cookie-consent__agree"> Accept</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>
   



<script>
  $(document).ready(function()
{
  if (!window.localStorage.getItem('accept_cookies'))
  {
    $('#cookie-consent').css('display','block');
  }

  // etc.
});
</script>
