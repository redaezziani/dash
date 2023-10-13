<div class="modal fade" id="edditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog flex justify-center items-center modal-dialog-centered" role="document">
        <div class="modal-content min-w-[50rem] flex flex-col gap-2 ">
            <div class="modal-header flex  justify-center items-center text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" rounded-md bg-white md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
                    <h1 class="text-gray-700">
                         تفاصيل العقد
                    </h1>
                    <form action="/updateContart" method="POST">
                        @csrf
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col ">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <input type="hidden" name="contrat_id" id="contrat_id">
                            <label for="user-name">
                                اسم العميل
                            </label>
                            <input required id="user-name"  name='nom' type="text" placeholder="اسم العميل"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="address">
                                عنوان المشروع
                            </label>
                            <input required  id="address" type="text" name='adress' placeholder="عنوان المشروع"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="date">
                                تاريخ العقد
                            </label>
                            <input required name='date' id="date" type="date" placeholder=" تاريخ العقد"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number">
                                رقم العقد
                            </label>
                            <input type="hidden" name="num_contrat" id="contract-number">
                            <input  disabled type="text" id="contract_number" placeholder=" رقم العقد"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="date">
                              المبلغ الاجمالي
                            </label>
                            <input required id="fullprice" name="full_price" type="number" placeholder="المبلغ الاجمالي"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number" name=''>
                              المبلغ المدفوع
                            </label>
                            <input required id="done-price" name="done_price" type="number" placeholder="المبلغ المدفوع"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number" name=''>
                                مع أقساط
                              </label>
                            <select id="credit" name="credit" class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" name="yesno" id="yesno">
                                <option value="" disabled selected>اختر نعم أو لا</option>
                                <option value="نعم">نعم</option>
                                <option value="لا">لا</option>
                              </select>
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label  for="contract-number" name='label' id='label'>
                              مبلغ الأقساط
                            </label>
                            <input id="credit_price" name="credit_price" type="number" placeholder="مبلغ الأقساط"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full">
                        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="project-description" >
                                وصف المشروع
                            </label>
                            <input required id="project-description" name='desc' type="text" placeholder="وصف المشروع"
                                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                        <label for='acc'>
                            المتفق عليه
                        </label>
                        <input required id="acc" name='daccord' type="text" placeholder="المتفق عليه"
                            class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                    </div>
                    <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                        <label for='conditions' >
                            الشروط والاحكام
                        </label>
                        <input required id="conditions" name='condition' type="text" placeholder="  الشروط والاحكام"
                            class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                    </div>
                </div>
                <div class="">
                    <button type="button" class=" px-5 min-w-[5rem] py-2 rounded-lg transition-all ease-in duration-300  bg-slate-300 text-slate-400 " data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="submit" class=" px-5 min-w-[5rem] py-2 rounded-lg transition-all ease-in duration-300 bg-violet-500 text-white">حفظ</button>
                </form>
            </div>
            </div>

            </div>

        </div>
    </div>
</div>
