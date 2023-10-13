<div class="modal fade" id="factureviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog flex justify-center items-center modal-dialog-centered" role="document">
        <div class="modal-content min-w-[50rem] flex flex-col gap-2 ">
            <div class="modal-header flex  justify-center items-center text-center">
                <h5 class="modal-title" id="exampleModalLongTitle">الفاتورة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" rounded-md bg-white md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
                    <form action="{{ route('updateFacture') }} " class=" rounded-md bg-white md:w-[90%]  flex flex-col justify-start items-start rtl" method="POST">
                        @csrf
                    <div class=" rounded-md bg-white md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
                        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col ">
                            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <input type="hidden" name="facture_id" id="facture_id">
                                <label for="user-name">
                                    اسم العميل
                                </label>
                                <input required id="user-name"  name='nom' type="text" placeholder="اسم العميل"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                                <label for="address">
                                    عنوان العميل
                                </label>
                                <input required id="address" type="text" name='adress' placeholder="عنوان العميل"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                        </div>
                        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                                <label for="date">
                                    تاريخ الفاتورة
                                </label>
                                <input required name='date' id="date" type="date" placeholder=" تاريخ العقد"
                                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                                <label for="contract-number">
                                    رقم الهاتف
                                </label>
                                <input required value="" name="phone" id="phone" type="text" placeholder=" رقم الهاتف"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                        </div>
                        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                                <label for="date">
                                  رقم الهوية
                                </label>
                                <input  required name="ident" id="ident" type="number" placeholder="رقم الهاتف"
                                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                                <label for="contract-number" name=''>
                                  وصف الفاتورة
                                </label>
                                <input  required id="desc" name="desc" type="text" placeholder="وصف الفاتورة"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                        </div>
                        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                            <div class="group-input w-[25%] sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                                <label for="date">
                                  المبلغ الاجمالي
                                </label>
                                <input  required id="full_price" name="full_price" type="number" placeholder="المبلغ الاجمالي"
                                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                            <div class="group-input w-[25%] flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                                <label for="contract-number" name=''>
                                  المبلغ المدفوع
                                </label>
                                <input  required id="done_price" name="done_price" type="number" placeholder="المبلغ المدفوع"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                            <div class="group-input w-[25%] flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                                <label for="contract-number" name=''>
                                  المبلغ المتبقي
                                </label>
                                <input  required id="credit_price" name="credit_price" type="number" placeholder="المبلغ المتبقي"
                                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            </div>
                        </div>

                        @for($i = 1; $i <= 9; $i++)
                        <div class=" flex rtl mt-2   gap-2 w-full md:flex-row flex-col">
                        <div class="group-input md:w-[25%] w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="desc_facture_{{ $i }}"> الوصف {{ $i }}</label>
                            <input  id="desc_facture_{{ $i }}" name="desc_facture_{{ $i }}" type="text" placeholder="الوصف" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="qte_{{ $i }}"> الكمية {{ $i }}</label>
                            <input  id="qte_{{ $i }}" name="qte_{{ $i }}" type="number" placeholder="الكمية" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="price_qte_{{ $i }}"> سعر الوحدة {{ $i }}</label>
                            <input  id="price_qte_{{ $i }}" name="price_qte_{{ $i }}" type="number" placeholder="سعر الوحدة" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="total_qte_{{ $i }}">  السعر الكلي {{ $i }} </label>
                            <input readonly id="total_qte_{{ $i }}" name="total_qte_{{ $i }}" type="number" placeholder="السعر الكلي" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    @endfor

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
