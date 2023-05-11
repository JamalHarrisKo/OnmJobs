/**
 * @vitest-environment happy-dom
 */
 import {describe, it, expect} from 'vitest'
 import {mount} from '@vue/test-utils'
 import PageContent from './PageContent.vue'
 
 describe('render loop test', ()=>{
     it ('should render', ()=>{
         const wrapper = mount(PageContent)
        //  expect(wrapper.find('p').exists()).toBeTruthy()
     })
 })